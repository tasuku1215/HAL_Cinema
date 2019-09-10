<?php
namespace LocalHalPH34\MovieTheater\exec\fee;

require_once($_SERVER["DOCUMENT_ROOT"]. "/ph34/movietheater/vendor/autoload.php");

use PDO;
use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use LocalHalPH34\MovieTheater\Classes\Conf;
use LocalHalPH34\MovieTheater\Classes\Functions;
use LocalHalPH34\MovieTheater\Classes\dao\feeDAO;

$loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"]. "/ph34/movietheater/templates");
$twig = new Environment($loader);

$templatePath = "fee/feeList.html";
$assign = [];
if (Functions::loginCheck()) {
    $validationMsgs[] = "ログインしていないか、前回ログインしてから一定時間が経過しています。もう一度ログインしなおしてください。";
    $assign["validationMsgs"] = $validationMsgs;
    $templatePath = "login.html";
}
else {
    if (isset($_SESSION["flashMsg"])) {
        $assign["flashMsg"] = $_SESSION["flashMsg"];
        unset($_SESSION["flashMsg"]);
    }

    Functions::cleanSession();

    try {
        $db = new PDO(Conf::DB_DNS, Conf::DB_USERNAME, Conf::DB_PASSWORD);
        $feeDAO = new FeeDAO($db);
        $feeList = $feeDAO->findAll();
        $assign["feeList"] = $feeList;
    }
    catch (PDOException $ex) {
        var_dump($ex);
        $assign["errorMsg"] = "DB接続に失敗しました。";
        $templatePath = "error.html";
    }
    finally {
        $db = null;
    }
}

$html = $twig->render($templatePath, $assign);
print($html);
