<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\CivilianSpaceships;

use App\StartFleetCommander\Spaceships\Strength\Medium;

/**
 * Class Transport
 * @package App\StartFleetCommander\Spaceships\CivilianSpaceships
 */
class Transport extends CivilianSpaceship
{

    /**
     * Transport constructor.
     * @param bool $isJuniorCaptain
     */
    public function __construct(bool $isJuniorCaptain = false)
    {
        parent::__construct($isJuniorCaptain);
    }

    /**
     * @return Medium
     */
    public function strength(): Medium
    {
        return new Medium();
    }
}