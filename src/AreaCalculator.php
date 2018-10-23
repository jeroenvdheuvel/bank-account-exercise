<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class AreaCalculator
{
    private $shapes;

    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum(): float
    {
        // TODO: Sum the area of all shapes
        return 0.0;
    }

    public function toHtml(): string
    {
        return sprintf('<h1>Sum</h1><p>%d</p>', $this->sum());
    }
}