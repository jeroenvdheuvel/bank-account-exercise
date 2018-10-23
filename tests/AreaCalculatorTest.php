<?php

declare(strict_types=1);

namespace Instapro\Exercise\Test;

use Instapro\Exercise\AreaCalculator;
use Instapro\Exercise\Circle;
use Instapro\Exercise\Square;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class AreaCalculatorTest extends TestCase
{
    /**
     * @test
     */
    public function sum(): void
    {
        $calculator = new AreaCalculator([new Square(1), new Circle(2)]);
        $calculator->sum();
    }

    /**
     * @test
     */
    public function toHtml(): void
    {
        $calculator = new AreaCalculator([new Square(1), new Circle(2)]);
        $calculator->toHtml();
    }
}
