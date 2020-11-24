<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\CivilianSpaceships;

use App\StartFleetCommander\Spaceships\SpaceshipBase;
use App\StartFleetCommander\Spaceships\Strength\Strength;

/**
 * Class CivilianSpaceship
 * @package App\StartFleetCommander\Spaceships\CivilianSpaceships
 */
abstract class CivilianSpaceship extends SpaceshipBase
{

    /**
     * CivilianSpaceship constructor.
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