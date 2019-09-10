<?php
namespace LocalHalPH34\ScottAdminKan\Classes\entity;

class Dept
{

    private $id;

    private $dpNo;

    private $dpName;

    private $dpLoc;



    public function getId(): ?int
    {
        return $this->id;
    }
    public function setId(int $id): void
    {
        $this->id = $id;
    }
    public function getDpNo(): ?int
    {
        return $this->dpNo;
    }
    public function setDpNo(int $dpNo): void
    {
        $this->dpNo = $dpNo;
    }
    public function getDpName(): ?string
    {
        return $this->dpName;
    }
    public function setDpName(string $dpName): void
    {
        $this->dpName = $dpName;
    }
    public function getDpLoc(): ?string
    {
        return $this->dpLoc;
    }
    public function setDpLoc(?string $dpLoc): void
    {
        $this->dpLoc = $dpLoc;
    }
}
