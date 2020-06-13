<?php

namespace App\Entity;

use App\Repository\RoomsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=RoomsRepository::class)
 */
class Rooms
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
    private $roomNumb;

    /**
     * @ORM\Column(type="integer")
     */
    private $paxPerRoom;

    /**
     * @ORM\Column(type="integer")
     */
    private $totalRoomNumbs;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoomNumb(): ?int
    {
        return $this->roomNumb;
    }

    public function setRoomNumb(int $roomNumb): self
    {
        $this->roomNumb = $roomNumb;

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

    public function getTotalRoomNumbs(): ?int
    {
        return $this->totalRoomNumbs;
    }

    public function setTotalRoomNumbs(int $totalRoomNumbs): self
    {
        $this->totalRoomNumbs = $totalRoomNumbs;

        return $this;
    }
}
