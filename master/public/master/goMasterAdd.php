<?php
namespace LocalHalPH34\ScottAdminKan\exec\dept;

require_once($_SERVER["DOCUMENT_ROOT"]. "/ph34/scottadminkan/vendor/autoload.php");

use Twig\Loader\FilesystemLoader;
use Twig\Environment;
use LocalHalPH34\ScottAdminKan\Classes\Functions;

$loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"] . "/ph34/scottadminkan/templates");
$twig = new Environment($loader);

$templatePath = "dept/deptAdd.html";
$assign = [];
if (Functions::loginCheck()) {
    $validationMsgs[] = "ログインしていないか、前回ログインしてから一定時間が経過しています。もう一度ログインしなおしてください。";
    $assign["validationMsgs"] = $validationMsgs;
    $templatePath = "login.html";
}

$html = $twig->render($templatePath, $assign);
print($html);
