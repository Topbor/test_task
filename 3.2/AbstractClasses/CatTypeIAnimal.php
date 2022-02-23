<?php

namespace AbstractClasses;

use Interfaces\IAnimal;

abstract class CatTypeIAnimal implements IAnimal
{
    protected string $eating;
    protected string $slipping;
    protected string $moving;
    protected string $maxSpeed;
    protected string $livingConditions;
    protected array $myFood;

    public function eat()
    {
        $this->eating = 'I eat meat and fish';
    }

    public function move()
    {
        $this->moving = 'I move by my legs';
        $this->maxSpeed = '60km/h';
    }

    public function sleep()
    {
        $this->slipping = 'I sleep at night';
    }

    public abstract function livingConditions();

    public abstract function iCanEat();
}