<?php

class Elephant
{
    private int $weight;
    private string $food;

    public function setWeight(int $weight)
    {
        $this->weight = $weight;
    }

    public function whatILikeToEat(string $food)
    {
        $this->food = $food;
    }

    public function getWeight(): int
    {
        return $this->weight;
    }

    public function getFood(): string
    {
        return $this->food;
    }

}