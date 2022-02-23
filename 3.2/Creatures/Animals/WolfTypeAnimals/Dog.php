<?php

class Dog extends \AbstractClasses\WolfTypeIAnimal
{
    public function __construct()
    {
        $this->livingConditions();
        $this->iCanEat();
        $this->myExtraAbility();
    }

    public function livingConditions()
    {
        $this->livingConditions = 'I love to live with people';
    }

    public function iCanEat()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof \AbstractClasses\Ungulates){
                $this->myFood[] = $class;
            }
        }
    }

    public function myExtraAbility()
    {
        $this->extraAbility = 'I can feel smells extra strong';
    }
}