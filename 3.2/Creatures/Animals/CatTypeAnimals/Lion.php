<?php

class Lion extends \AbstractClasses\CatTypeIAnimal
{

    public function livingConditions()
    {
        $this->livingConditions = 'I live in Africa in wild conditions';
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