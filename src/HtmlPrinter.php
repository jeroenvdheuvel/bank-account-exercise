<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class HtmlPrinter
{
    public function output(float $sum): string
    {
        return sprintf('<h1>Sum</h1><p>%d</p>', $sum);
    }
}
