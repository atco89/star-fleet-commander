<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Formation;

use App\StartFleetCommander\Spaceships\Spaceship;

/**
 * Class Escort
 * @package App\StartFleetCommander\Formation
 */
class Escort extends Formation
{

    /**
     * @var Spaceship[]
     */
    private array $front;

    /**
     * @var Spaceship[]
     */
    private array $back;

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
     * @return Spaceship[]
     */
    protected function merge(): array
    {
        $this->distributeSpaceships();
        return array_merge($this->front, $this->civilianSpaceships, $this->back);
    }

    /**
     * @return void
     */
    private function distributeSpaceships(): void
    {
        for ($i = 0; $i < count($this->militarySpaceships); $i++) {
            if ($i % 2 === 0) {
                $this->front[] = $this->militarySpaceships[$i];
                continue;
            }
            $this->back[] = $this->militarySpaceships[$i];
        }
    }
}