<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class Circle implements ShapeInterface
{
    /**
     * @var int
     */
    private $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * $this->radius ** 2;
    }
}
