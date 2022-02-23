<?php

class Cat extends \AbstractClasses\CatTypeIAnimal
{
    public function __invoke()
    {
        $this->livingConditions();
        $this->iCanEat();
        $this->move();
    }

    public function livingConditions()
    {
        $this->livingConditions = 'I can live in wild world conditions and with humans';
    }

    public function iCanEat()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof \AbstractClasses\SimpleFishes){
                $this->myFood[] = $class;
            }
        }
    }

    public function move()
    {
        $this->maxSpeed = 'My max speed is 30 km/h';
    }

    public function eat()
    {
        $this->eating = 'I like to eat meet and feed';
    }
}