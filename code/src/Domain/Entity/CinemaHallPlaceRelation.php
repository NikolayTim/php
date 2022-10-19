<?php

declare(strict_types=1);

namespace Nikolai\Php\Domain\Entity;

class CinemaHallPlaceRelation extends AbstractEntity
{
    private ?int $id = null;

    private CinemaHall $cinemaHall;

    private Place $place;

    public function __construct(?int $id, CinemaHall $cinemaHall, Place $place)
    {
        $this->id = $id;
        $this->cinemaHall = $cinemaHall;
        $this->place = $place;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getCinemaHall(): CinemaHall
    {
        return $this->cinemaHall;
    }

    public function setCinemaHall(CinemaHall $cinemaHall): self
    {
        $this->cinemaHall = $cinemaHall;
        return $this;
    }

    public function getPlace(): Place
    {
        return $this->place;
    }

    public function setPlace(Place $place): self
    {
        $this->place = $place;
        return $this;
    }
}