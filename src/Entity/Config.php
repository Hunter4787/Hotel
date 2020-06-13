<?php

namespace App\Entity;

use App\Repository\ConfigRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ConfigRepository::class)
 */
class Config
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $childMinAge;

    /**
     * @ORM\Column(type="integer")
     */
    private $childMaxAge;

    /**
     * @ORM\Column(type="integer")
     */
    private $adultMinAge;

    /**
     * @ORM\Column(type="integer")
     */
    private $adultMaxAge;

    /**
     * @ORM\Column(type="integer")
     */
    private $paxPerRoom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getChildMinAge(): ?int
    {
        return $this->childMinAge;
    }

    public function setChildMinAge(int $childMinAge): self
    {
        $this->childMinAge = $childMinAge;

        return $this;
    }

    public function getChildMaxAge(): ?int
    {
        return $this->childMaxAge;
    }

    public function setChildMaxAge(int $childMaxAge): self
    {
        $this->childMaxAge = $childMaxAge;

        return $this;
    }

    public function getAdultMinAge(): ?int
    {
        return $this->adultMinAge;
    }

    public function setAdultMinAge(int $adultMinAge): self
    {
        $this->adultMinAge = $adultMinAge;

        return $this;
    }

    public function getAdultMaxAge(): ?int
    {
        return $this->adultMaxAge;
    }

    public function setAdultMaxAge(int $adultMaxAge): self
    {
        $this->adultMaxAge = $adultMaxAge;

        return $this;
    }

    public function getPaxPerRoom(): ?int
    {
        return $this->paxPerRoom;
    }

    public function setPaxPerRoom(int $paxPerRoom): self
    {
        $this->paxPerRoom = $paxPerRoom;

        return $this;
    }
}
