<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\MilitarySpaceships;

use App\StartFleetCommander\Spaceships\Strength\Medium;

/**
 * Class Interceptor
 * @package App\StartFleetCommander\Spaceships\MilitarySpaceships
 */
class Interceptor extends MilitarySpaceship
{

    /**
     * Interceptor constructor.
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