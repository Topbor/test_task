<?php

namespace AbstractClasses;

use Interfaces\IAnimal;

abstract class WolfTypeIAnimal implements IAnimal
{
    protected string $eating;
    protected string $slipping;
    protected string $moving;
    protected string $maxSpeed;
    protected string $livingConditions;
    protected array $myFood;
    protected string $extraAbility;

    public function eat()
    {
        $this->eating = 'I`m eating meat';
    }

    public function move()
    {
        $this->moving = 'I move by legs';
        $this->maxSpeed = '40km/h';
    }

    public function sleep()
    {
        $this->slipping = 'I sleep at night';
    }

    public abstract function livingConditions();

    public abstract function iCanEat();

    public abstract function myExtraAbility();
}