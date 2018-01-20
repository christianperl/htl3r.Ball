<?php

namespace PERL\Ball;

abstract class Ball
{

    /**
     *  Attribute Name
     */
    private $Name;

    /**
     *  Attribute Diameter
     */
    private $diameter;

    /**
     *  Attribute Material
     */
    private $material;

    /**
     * Ball constructor.
     * @param string $Name The name of the ball
     * @param float $diameter The diameter of the ball
     * @param string $material The material of the ball
     */
    function __construct(string $Name, float $diameter, string $material)
    {
        $this->Name = $Name;
        $this->diameter = $diameter;
        $this->material = $material;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return float
     */
    public function getDiameter(): float
    {
        return $this->diameter;
    }

    /**
     * @return string
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    /**
     * Function to calculate the volume
     * @return float
     */
    public function getVolume(): float
    {
        return (1/6) * pi() * pow($this->getDiameter(), 3);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName() . ", " . $this->getDiameter() . ", " . $this->getMaterial() . ", " .  $this->getVolume();
    }

}