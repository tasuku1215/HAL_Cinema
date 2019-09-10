<?php
namespace LocalHalPH34\MovieTheater\exec;

require_once($_SERVER["DOCUMENT_ROOT"]."/ph34/movieTheater/vendor/autoload.php");

use PDO;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use LocalHalPH34\MovieTheater\Classes\Conf;
use LocalHalPH34\MovieTheater\Classes\dao\UserDAO;
use LocalHalPH34\movieTheater\Classes\entity\User;

$loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"]."/ph34/movieTheater/templates");
$twig = new Environment($loader);

$isRedirect = false;
$templatePath = "login.html";
$assign = [];

$loginId = $_POST["loginId"];
$loginPw = $_POST["loginPw"];

$loginId = trim($loginId);
$loginPw = trim($loginPw);

$validationMsgs = [];
if (empty($validationMsgs)) {
	try {
		$db = new PDO(Conf::DB_DNS, Conf::DB_USERNAME, Conf::DB_PASSWORD);
		$userDAO = new UserDAO($db);

		$user = $userDAO->findByLoginId($loginId);
		if($user == null){
			$validationMsgs[] = "存在しないIDです。正しいIDを選択してください。";
		}
		else {
			$userPw = $user->getPasswd();
			if(password_verify($loginPw,$userPw)) {
				$id = $user->getId();
				$nameLast = $user->getNameLast();
				$nameFirst = $user->getNameFirst();

				$_SESSION["loginFlg"] = true;
				$_SESSION["id"] = $id;
				$_SESSION["name"] = $nameLast." ".$nameFirst;
				$_SESSION["auth"] = 1;
				$isRedirect = true;
			}
			else {
				$validationMsgs[] = "パスワードが違います。正しいパスワードを入力してください。";
			}
		}
	}
	catch(PDOException $ex) {
		var_dump($ex);
		$assign["errorMsg"] = "DB接続に失敗しました。";
		$templatePath = "error.html";
	}
	finally {
		$db = null;
	}
}

if($isRedirect) {
	header("Location: /ph34/movieTheater/public/goTop.php");
	exit;
}
else {
	if(!empty($validationMsgs)) {
		$assign["validationMsgs"] = $validationMsgs;
		$assign["loginId"] = $loginId;
	}
	$html = $twig->render($templatePath, $assign);
	print($html);
}
