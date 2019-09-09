<?php
/**
 * PH34 Sample9 マスターテーブル管理完版　Src05/20
 *
 * @author Shinzo SAITO
 *
 * ファイル名=User.php
 * ディレクトリ=/ph34/scottadminkan/classes/entity/
 */
namespace LocalHalPH34\ScottAdminKan\Classes\entity;

/**
 *ユーザエンティティクラス。
 */
class User {
    /**
     *主キーのid。
     */
    private $id;
    /**
     *ログインid。
     */
    private $login;
    /**
     *パスワード。
     */
    private $passwd;
    /**
     *姓。
     */
    private $nameLast;
    /**
     *名。
     */
    private $nameFirst;
    /**
     *メールアドレス。
     */
    private $mail;

    //以下アクセスメソッド。

    public function getId(): ?int {
        return $this->id;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }
    public function getLogin(): ?string {
        return $this->login;
    }
    public function setLogin(string $id): void {
        $this->login = $login;
    }
    public function getPasswd(): ?string {
        return $this->passwd;
    }
    public function setPasswd(string $passwd): void {
        $this->passwd = $passwd;
    }
    public function getNameLast(): ?string {
        return $this->nameLast;
    }
    public function setNameLast(string $nameLast): void {
        $this->nameLast = $nameLast;
    }
    public function getNameFirst(): ?string {
        return $this->nameFirst;
    }
    public function setNameFirst(string $nameFirst): void {
        $this->nameFirst = $nameFirst;
    }
    public function getMail(): ?string {
        return $this->mail;
    }
    public function setMail(string $mail): void {
        $this->mail = $mail;
    }
}
?>
