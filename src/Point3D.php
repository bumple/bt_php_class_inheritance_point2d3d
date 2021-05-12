<?php

class Point3D extends Point2D
{
    public float $z;

    public function __construct(float $x, float $y, float $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    /**
     * @return float
     */
    public function getZ(): float
    {
        return $this->z;
    }

    /**
     * @param float $z
     */
    public function setZ(float $z): void
    {
        $this->z = $z;
    }

    public function getXYZ(): array
    {
        $data['x'] = parent::getX();
        $data['y'] = parent::getY();
        $data['z'] = $this->z;
        return $data;
    }

}