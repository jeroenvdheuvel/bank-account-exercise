<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class Square
{
    public $length;

    public function __construct(int $length)
    {
        $this->length = $length;
    }
}
