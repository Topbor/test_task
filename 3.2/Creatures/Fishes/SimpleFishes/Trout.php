<?php

class Trout extends \AbstractClasses\SimpleFishes
{
    public function waterType()
    {
        $this->waterTypeForLeaving = 'I live in fresh water';
    }

    public function locationOfLiving()
    {
        $this->locationOfLiving = 'mountain rivers';
    }

    public function iHaveToRunAwayFrom()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof \AbstractClasses\PredatoryFishes){
                $this->myEnemies[] = $class;
            }
        }
    }
}