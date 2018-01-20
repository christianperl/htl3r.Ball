<?php

namespace PERL\Ball;

class Handball extends Ball implements BallInterface
{

    function __construct(string $Name, float $diameter, string $material)
    {
        parent::__construct($Name, $diameter, $material);
    }

}