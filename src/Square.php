<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class Square implements ShapeInterface
{
    /**
     * @var int
     */
    private $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }

    public function area(): float
    {
        return (float) $this->length ** 2;
    }
}
