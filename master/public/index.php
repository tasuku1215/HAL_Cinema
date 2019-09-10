<?php
/**
 * PH34　Sample9　マスタテーブル管理完版　Src09/20
 *
 * @author Shinzo SAITO
 *
 *
 * ファイル名=index.php
 * ディレクトリ=/ph34/scottadminkan/public/
 */
namespace LocalHalPH34\MovieTheater\exec;

require_once($_SERVER["DOCUMENT_ROOT"]."/ph34/movieTheater/vendor/autoload.php");

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

$loader = new FilesystemLoader($_SERVER["DOCUMENT_ROOT"]. "/ph34/movieTheater/templates");
$twig = new Environment($loader);

$html = $twig->render("login.html");
print($html);
