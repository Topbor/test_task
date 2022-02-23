<?php

namespace AbstractClasses;

abstract class PredatoryFishes implements \Interfaces\IFish
{
    public string $locationOfLiving;
    public string $waterTypeForLeaving;
    public array $myVictims;

    public function waterType()
    {
        $this->waterTypeForLeaving = 'fresh water';
    }

    public function locationOfLiving()
    {
        $this->locationOfLiving = 'Pacific ocean';
    }

    abstract public function iLoveToEat();
}