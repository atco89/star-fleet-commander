<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Formation;

use App\StartFleetCommander\Spaceships\Spaceship;

/**
 * Class Attack
 * @package App\StartFleetCommander\Formation
 */
class Attack extends Formation
{

    /**
     * @param Spaceship[] $spaceships
     * @return void
     */
    protected function sort(array &$spaceships): void
    {
        usort($spaceships, function (Spaceship $spaceship1, Spaceship $spaceship2): int {
            return $spaceship2->properties()->rank() <=> $spaceship1->properties()->rank();
        });
    }

    /**
     * @return array
     */
    protected function merge(): array
    {
        return array_merge($this->militarySpaceships, $this->civilianSpaceships);
    }
}