<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\CivilianSpaceships;

use App\StartFleetCommander\Spaceships\Strength\Weak;

/**
 * Class Recreation
 * @package App\StartFleetCommander\Spaceships\CivilianSpaceships
 */
class Recreation extends CivilianSpaceship
{

    /**
     * Recreation constructor.
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