#!/usr/bin/env php
<?php

declare(strict_types=1);

use Instapro\Exercise\AreaCalculator;

require __DIR__ . '/../vendor/autoload.php';

$calculator = new AreaCalculator();
$calculator->sum();
