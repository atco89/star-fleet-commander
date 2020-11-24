<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\MilitarySpaceships;

use App\StartFleetCommander\Spaceships\Strength\Weak;

/**
 * Class Leviathan
 * @package App\StartFleetCommander\Spaceships\MilitarySpaceships
 */
class Leviathan extends MilitarySpaceship
{

    /**
     * Leviathan constructor.
     * @param bool $isJuniorCaptain
     */
    public function __construct(bool $isJuniorCaptain = false)
    {
        parent::__construct($isJuniorCaptain);
    }

    /**
     * @return Weak
     */
    public function strength(): Weak
    {
        return new Weak();
    }
}