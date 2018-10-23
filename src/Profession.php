<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class Profession
{
    /**
     * @var string
     */
    private $professionName;

    /**
     * @var Service[]
     */
    private $services;

    public function __construct(string $professionName, Service ...$services)
    {
        $this->professionName = $professionName;
        $this->services = $services;
    }

    public function getName(): string
    {
        return $this->professionName;
    }

    /**
     * @return Service[]
     */
    public function getServices(): array
    {
        return $this->services;
    }
}
