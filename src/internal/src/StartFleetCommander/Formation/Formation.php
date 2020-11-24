<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Formation;

use App\StartFleetCommander\Spaceships\Spaceship;

/**
 * Class Formation
 * @package App\StartFleetCommander\Formation
 */
abstract class Formation
{

    /**
     * @var Spaceship[]
     */
    protected array $militarySpaceships = [];

    /**
     * @var Spaceship[]
     */
    protected array $civilianSpaceships = [];

    /**
     * @param Spaceship[] $fleet
     * @return array
     */
    final public function take(array $fleet): array
    {
        $this->groupSpaceships($fleet);

        $this->sort($this->militarySpaceships);
        $this->sort($this->civilianSpaceships);

        return $this->merge();
    }

    /**
     * @param Spaceship[] $fleet
     * @return void
     */
    private function groupSpaceships(array $fleet): void
    {
        foreach ($fleet as $spaceship) {
            if ($spaceship->properties()->isMilitary()) {
                $this->militarySpaceships[] = $spaceship;
                continue;
            }
            $this->civilianSpaceships[] = $spaceship;
        }
    }

    /**
     * @param array $spaceships
     */
    abstract protected function sort(array &$spaceships): void;

    /**
     * @return array
     */
    abstract protected function merge(): array;
}