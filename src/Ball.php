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

    function __construct(string $Name, float $diameter, string $material)
    {
        $this->Name = $Name;
        $this->diameter = $diameter;
        $this->material = $material;
    }

    /**
     * @return mixed
     */
    public function getName(): string
    {
        return $this->Name;
    }

    /**
     * @return mixed
     */
    public function getDiameter(): float
    {
        return $this->diameter;
    }

    /**
     * @return mixed
     */
    public function getMaterial(): string
    {
        return $this->material;
    }

    public function getVolume(): float
    {
        return (1/6) * pi() * pow($this->getDiameter(), 3);
    }

    public function __toString()
    {
        return $this->getName() . ", " . $this->getDiameter() . ", " . $this->getMaterial() . ", " .  $this->getVolume();
    }

}