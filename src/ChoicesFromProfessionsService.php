<?php

declare(strict_types=1);

namespace Instapro\Exercise;

class ChoicesFromProfessionsService
{
    public function getChoices(Profession ...$professions): array
    {
        $choices = [];

        if (count($professions) === 1) {
            /** @var Profession $profession */
            $profession = array_shift($professions);
            foreach ($profession->getServices() as $service) {
                $choices[$service->getName()] = $service->getSlug();
            }
        } else {
            foreach ($professions as $profession) {
                if (count($profession->getServices()) == 0) {
                    continue;
                }

                $choices[$profession->getName()] = [];

                foreach ($profession->getServices() as $service) {
                    $choices[$profession->getName()][$service->getName()] = $service->getSlug();
                }
            }
        }

        return $choices;
    }
}
