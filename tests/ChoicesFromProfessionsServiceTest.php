<?php

declare(strict_types=1);

namespace Instapro\Exercise\Test;

use Instapro\Exercise\ChoicesFromProfessionsService;
use Instapro\Exercise\Profession;
use Instapro\Exercise\Service;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 */
final class ChoicesFromProfessionsServiceTest extends TestCase
{
    /**
     * @test
     */
    public function getChoices(): void
    {
        $choicesFromProfessionsService = new ChoicesFromProfessionsService();
        $choices = $choicesFromProfessionsService->getChoices(
            new Profession('profession A'),
            new Profession('profession B', new Service('service 1', 'service-1')),
            new Profession('profession C', new Service('service 2', 'service-2'), new Service('service 3', 'service-3'))
        );

        self::assertEquals(
            [
                'profession B' => ['service 1' => 'service-1'],
                'profession C' => ['service 2' => 'service-2', 'service 3' => 'service-3'],
            ],
            $choices
        );
    }
}
