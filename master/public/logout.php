<?php
/**







 */
namespace LocalHalPH34\MovieTheater\exec;

require_once($_SERVER["DOCUMENT_ROOT"] . "/ph34/movieTheater/vendor/autoload.php");

session_destroy();

header("Location: /ph34/movieTheater/public/index.php");
exit;
