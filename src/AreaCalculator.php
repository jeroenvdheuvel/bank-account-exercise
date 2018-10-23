<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class AreaCalculator
{
    protected $shapes;

    public function __construct(array $shapes)
    {
        $this->shapes = $shapes;
    }

    public function sum(): float
    {
        $area = [];

        foreach ($this->shapes as $shape) {
            if ($shape instanceof Circle) {
                $area[] = pi() * $shape->radius ** 2;
            } elseif ($shape instanceof Square) {
                $area[] = $shape->length ** 2;
            }
        }

        return array_sum($area);
    }

    public function toHtml(): string
    {
        return sprintf('<h1>Sum</h1><p>%d</p>', $this->sum());
    }
}
