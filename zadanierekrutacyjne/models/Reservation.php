<?php
declare(strict_types=1);

class Reservation
{
    private string $name;
    private string $surname;
    private string $date;

    public function __construct($name, $surname, $date)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->date = $date;
    }

    public function getName () : string
    {
        return $this->name;
    }
    public function getSurname () : string
    {
        return $this->surname;
    }
    public function getDate () : string
    {
        return $this->date;
    }
    public function setName (string $name) : void
    {
        $this->name = $name;
    }
    public function setSurname (string $surname) : void
    {
        $this->surname = $surname;
    }
    public function setDate (string $date) : void
    {
        $this->date = $date;
    }

}