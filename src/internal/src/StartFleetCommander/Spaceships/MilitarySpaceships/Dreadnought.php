<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\MilitarySpaceships;

use App\StartFleetCommander\Spaceships\Strength\Strong;

/**
 * Class Dreadnought
 * @package App\StartFleetCommander\Spaceships\MilitarySpaceships
 */
class Dreadnought extends MilitarySpaceship
{

    /**
     * Dreadnought constructor.
     * @param bool $isJuniorCaptain
     */
    public function __construct(bool $isJuniorCaptain = false)
    {
        parent::__construct($isJuniorCaptain);
    }

    /**
     * @return Strong
     */
    public function strength(): Strong
    {
        return new Strong();
    }
}