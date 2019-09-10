<?php
/**






 */
namespace LocalHalPH34\MovieTheater\Classes;

/**

 */
class Functions {
    /**




     */
    public static function loginCheck(): bool {
        $result = false;
        if (!isset($_SESSION["loginFlg"]) || $_SESSION["loginFlg"] == false || !isset($_SESSION["id"]) || !isset($_SESSION["name"]) || !isset($_SESSION["auth"])) {
            $result = true;
        }
        return $result;
    }

    /**



     */
    public static function cleanSession(): void {
        $loginFlg = $_SESSION["loginFlg"];
        $id = $_SESSION["id"];
        $name = $_SESSION["name"];
        $auth = $_SESSION["auth"];

        session_unset();

        $_SESSION["loginFlg"] = $loginFlg;
        $_SESSION["id"] = $id;
        $_SESSION["name"] = $name;
        $_SESSION["auth"] = $auth;
    }
}
