<?php

namespace PERL\Ball;

class Basketball extends Ball implements BallInterface
{

    function __construct(string $Name, float $diameter, string $material)
    {
        parent::__construct($Name, $diameter, $material);
    }

}