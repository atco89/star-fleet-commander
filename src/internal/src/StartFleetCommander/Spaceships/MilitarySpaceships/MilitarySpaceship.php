<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\MilitarySpaceships;

use App\StartFleetCommander\Spaceships\SpaceshipBase;
use App\StartFleetCommander\Spaceships\Strength\Strength;

/**
 * Class MilitarySpaceship
 * @package App\StartFleetCommander\Spaceships\MilitarySpaceships
 */
abstract class MilitarySpaceship extends SpaceshipBase
{

    /**
     * MilitarySpaceship constructor.
     * @param bool $isJuniorCaptain
     */
    public function __construct(bool $isJuniorCaptain)
    {
        parent::__construct($isJuniorCaptain);
    }

    /**
     * @return Strength
     */
    abstract public function strength(): Strength;
}