<?php

class Wolf extends \AbstractClasses\WolfTypeIAnimal
{

    public function livingConditions()
    {
        $this->livingConditions = 'I love to live with people';
    }

    public function iCanEat()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof Shark) continue;
            if($class instanceof \AbstractClasses\Ungulates || $class instanceof \Interfaces\IFish){
                $this->myFood[] = $class;
            }
        }
    }

    public function myExtraAbility()
    {
        $this->extraAbility = 'I can live in extra cold conditions';
    }
}