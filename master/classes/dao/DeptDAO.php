<?php
namespace LocalHalPH34\ScottAdminKan\Classes\dao;

use PDO;
use LocalHalPH34\ScottAdminKan\Classes\entity\Dept;

class DeptDAO
{

    private $db;


    public function __construct(PDO $db)
    {
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $db->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $this->db = $db;
    }


    public function findByPK(int $id): ?Dept
    {
        $sql = "SELECT * FROM depts WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        $dept = null;
        if ($result && $row = $stmt->fetch()) {
            $idDb = $row['id'];
            $dpNo = $row['dp_no'];
            $dpName = $row['dp_name'];
            $dpLoc = $row['dp_loc'];

            $dept = new Dept();
            $dept->setId($idDb);
            $dept->setDpNo($dpNo);
            $dept->setDpName($dpName);
            $dept->setDpLoc($dpLoc);
        }
        return $dept;
    }


    public function findByDpNo(int $dpNo): ?Dept
    {
        $sql = "SELECT * FROM depts WHERE dp_no = :dp_no";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":dp_no", $dpNo, PDO::PARAM_INT);
        $result = $stmt->execute();
        $dept = null;
        if ($result && $row = $stmt->fetch()) {
            $id = $row['id'];
            $dpNoDB = $row['dp_no'];
            $dpName = $row['dp_name'];
            $dpLoc = $row['dp_loc'];

            $dept = new Dept();
            $dept->setId($id);
            $dept->setDpNo($dpNoDB);
            $dept->setDpName($dpName);
            $dept->setDpLoc($dpLoc);
        }
        return $dept;
    }


    public function findAll(): array
    {
        $sql = "SELECT * FROM depts ORDER BY dp_no";
        $stmt = $this->db->prepare($sql);
        $result = $stmt->execute();
        $deptList = [];
        while ($row = $stmt->fetch()) {
            $id = $row['id'];
            $dpNo = $row['dp_no'];
            $dpName = $row['dp_name'];
            $dpLoc = $row['dp_loc'];

            $dept = new Dept();
            $dept->setId($id);
            $dept->setDpNo($dpNo);
            $dept->setDpName($dpName);
            $dept->setDpLoc($dpLoc);
            $deptList[$id] = $dept;
        }
        return $deptList;
    }


    public function insert(Dept $dept): int
    {
        $sqlInsert = "INSERT INTO depts (dp_no, dp_name, dp_loc) VALUES (:dp_no, :dp_name, :dp_loc)";
        $stmt = $this->db->prepare($sqlInsert);
        $stmt->bindValue(":dp_no", $dept->getDpNo(), PDO::PARAM_INT);
        $stmt->bindValue(":dp_name", $dept->getDpName(), PDO::PARAM_STR);
        $stmt->bindValue(":dp_loc", $dept->getDpLoc(), PDO::PARAM_STR);
        $result = $stmt->execute();
        if ($result) {
            $dpId = $this->db->lastInsertId();
        } else {
            $dpId = -1;
        }
        return $dpId;
    }


    public function update(Dept $dept): bool
    {
        $sqlUpdate = "UPDATE depts SET dp_no = :dp_no, dp_name = :dp_name, dp_loc = :dp_loc WHERE id = :id";
        $stmt = $this->db->prepare($sqlUpdate);
        $stmt->bindValue(":dp_no", $dept->getDpNo(), PDO::PARAM_INT);
        $stmt->bindValue(":dp_name", $dept->getDpName(), PDO::PARAM_STR);
        $stmt->bindValue(":dp_loc", $dept->getDpLoc(), PDO::PARAM_STR);
        $stmt->bindValue(":id", $dept->getId(), PDO::PARAM_INT);
        $result = $stmt->execute();
        return $result;
    }


    public function delete(int $id): bool
    {
        $sql = "DELETE FROM depts WHERE id = :id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindValue(":id", $id, PDO::PARAM_INT);
        $result = $stmt->execute();
        return $result;
    }
}
