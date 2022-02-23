<?php

class Cougar extends \AbstractClasses\CatTypeIAnimal
{

    public function livingConditions()
    {
        $this->livingConditions = 'wild world conditions';
    }

    public function iCanEat()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof \AbstractClasses\SimpleFishes || $class instanceof \AbstractClasses\Ungulates){
                $this->myFood[] = $class;
            }
        }
    }
}