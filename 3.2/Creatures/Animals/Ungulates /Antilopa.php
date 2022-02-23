<?php

use AbstractClasses\CatTypeIAnimal;

class Antilopa extends \AbstractClasses\Ungulates
{

    public function whoCanEatMe()
    {
        foreach(get_declared_classes() as $class){
            if($class instanceof Cat) continue;

            if($class instanceof CatTypeIAnimal){
                $this->myEnemies[] = $class;
            }
        }
    }
}