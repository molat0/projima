<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmployeeRepository")
 */
class Employee
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $bankAccountNo;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $bankAccountName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address;

    /**
     * @ORM\Column(type="datetime")
     */
    private $hiredAt;

    public function getId()
    {
        return $this->id;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getBankAccountNo(): ?int
    {
        return $this->bankAccountNo;
    }

    public function setBankAccountNo(?int $bankAccountNo): self
    {
        $this->bankAccountNo = $bankAccountNo;

        return $this;
    }

    public function getBankAccountName(): ?string
    {
        return $this->bankAccountName;
    }

    public function setBankAccountName(string $bankAccountName): self
    {
        $this->bankAccountName = $bankAccountName;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getHiredAt(): ?\DateTimeInterface
    {
        return $this->hiredAt;
    }

    public function setHiredAt(\DateTimeInterface $hiredAt): self
    {
        $this->hiredAt = $hiredAt;

        return $this;
    }
}
