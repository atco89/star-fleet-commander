<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships;

use App\StartFleetCommander\Spaceships\Captain\Captain;
use App\StartFleetCommander\Spaceships\Strength\Strength;

/**
 * Interface Spaceship
 * @package App\StartFleetCommander\Spaceships
 */
interface Spaceship
{

    /**
     * @return Captain
     */
    public function captain(): Captain;

    /**
     * @return Strength
     */
    public function strength(): Strength;

    /**
     * @return SpaceshipProperties
     */
    public function properties(): SpaceshipProperties;
}