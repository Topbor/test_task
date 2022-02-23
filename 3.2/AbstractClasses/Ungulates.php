<?php

namespace AbstractClasses;

abstract class Ungulates implements \Interfaces\IAnimal
{
    protected string $eating;
    protected string $slipping;
    protected string $moving;
    protected string $maxSpeed;
    protected array $myEnemies;

    public function eat()
    {
        $this->eating = 'I`m herbivore';
    }

    public function move()
    {
        $this->moving = 'I move with my hoofs';
        $this->maxSpeed = '40 km/h';
    }

    public function sleep()
    {
        $this->slipping = 'I sleep at night';
    }

    public abstract function whoCanEatMe();
}