<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class AreaCalculator
{
    /**
     * @var HtmlPrinter
     */
    private $printer;

    /**
     * @var ShapeInterface[]
     */
    private $shapes;

    public function __construct(HtmlPrinter $printer, ShapeInterface ...$shapes)
    {
        $this->printer = $printer;
        $this->shapes = $shapes;
    }

    public function sum(): float
    {
        $sum = 0.0;

        foreach ($this->shapes as $shape) {
            $sum += $shape->area();
        }

        return $sum;
    }

    public function output(): string
    {
        return $this->printer->output($this->sum());
    }
}
