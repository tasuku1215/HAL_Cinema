<?php
/**
 * PH34 Sample9 マスターテーブル管理完版　Src05/20
 *
 * @author Shinzo SAITO
 *
 * ファイル名=User.php
 * ディレクトリ=/ph34/scottadminkan/classes/entity/
 */
namespace LocalHalPH34\ScottAdminKan\Classes\dao;

use PDO;
use LocalHalPH34\ScottAdminKan\Classes\entity\User;

/**
 * usersテーブルへのデータ操作クラス。
 */
class UserDAO {
    /**
     * @ var PDO DB接続オブジェクト
     */
    private $db;

    /**
     * コンストラクタ
     *
     * @ param PDO $db DB接続オブジェクト
     */
    public function __construct(PDO $db) {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }

    /**
     * ログインIDによる検索
     *
     * @ param string $loginId ログインID
     * @ return User 該当するUserオブジェクト。ただし該当データがない場合はnull。
     */
    public function findByLoginid(string $loginId): ?User {
        $sql = "SELECT * FROM users WHERE login = :login";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":login", $loginId, PDO::PARAM_INT);
        $result = $stmt->execute();
        $user = null;
        if($result && $row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $id = $row["id"];
            $login = $row["login"];
            $nameLast = $row["name_last"];
            $nameFirst = $row["name_first"];
            $passwd = $row["passwd"];
            $mail = $row["mail"];

            $user = new User();
            $user->setId($id);
            $user->setLogin($login);
            $user->setNameFirst($nameFirst);
            $user->setNameLast($nameLast);
            $user->setPasswd($passwd);
            $user->setMail($mail);
        }
        return $user;
    }
}
