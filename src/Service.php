<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class Service
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    public function __construct(string $name, string $slug)
    {
        $this->name = $name;
        $this->slug = $slug;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSlug(): string
    {
        return $this->slug;
    }
}
