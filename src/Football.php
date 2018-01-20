<?php

namespace PERL\Ball;

class Football extends Ball implements BallInterface
{

    function __construct(string $Name, float $diameter, string $material)
    {
        parent::__construct($Name, $diameter, $material);
    }

    public function getVolume(): float
    {
        return (1/6) * pi() * pow($this->getDiameter(), 3);
    }

}