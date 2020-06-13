<?php

namespace App\Entity;

use App\Repository\ReservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReservationRepository::class)
 */
class Reservation
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
    private $aduls;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $childs;

    /**
     * @ORM\Column(type="integer")
     */
    private $idRoom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAduls(): ?int
    {
        return $this->aduls;
    }

    public function setAduls(int $aduls): self
    {
        $this->aduls = $aduls;

        return $this;
    }

    public function getChilds(): ?int
    {
        return $this->childs;
    }

    public function setChilds(?int $childs): self
    {
        $this->childs = $childs;

        return $this;
    }

    public function getIdRoom(): ?int
    {
        return $this->idRoom;
    }

    public function setIdRoom(int $idRoom): self
    {
        $this->idRoom = $idRoom;

        return $this;
    }
}
