<?php

class Shark extends \AbstractClasses\PredatoryFishes
{

    public function locationOfLiving()
    {
        $this->locationOfLiving = 'oceans';
    }

    public function iLoveToEat()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof \AbstractClasses\SimpleFishes){
                $this->myVictims[] = $class;
            }
        }
    }
}