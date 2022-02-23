<?php

namespace AbstractClasses;

abstract class SimpleFishes implements \Interfaces\IFish
{
    public string $locationOfLiving;
    public string $waterTypeForLeaving;
    public array $myEnemies;

    public function waterType()
    {
        $this->waterTypeForLeaving = 'salt water';
    }

    public function locationOfLiving()
    {
        $this->locationOfLiving = 'Black Sea';
    }

    abstract public function iHaveToRunAwayFrom();
}