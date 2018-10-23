<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class Circle
{
    public $radius;

    public function __construct(int $radius)
    {
        $this->radius = $radius;
    }
}
