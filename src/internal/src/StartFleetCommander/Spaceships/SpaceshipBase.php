<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships;

use App\StartFleetCommander\Spaceships\Captain\Captain;
use App\StartFleetCommander\Spaceships\Captain\SpaceshipCaptain;
use App\StartFleetCommander\Spaceships\Strength\Strength;

/**
 * Class SpaceshipBase
 * @package App\StartFleetCommander\Spaceships
 */
abstract class SpaceshipBase implements Spaceship
{
    use Properties;

    /**
     * @var Captain|SpaceshipCaptain
     */
    protected Captain $captain;

    /**
     * SpaceshipBase constructor.
     * @param bool $isJuniorCaptain
     */
    public function __construct(bool $isJuniorCaptain)
    {
        $this->captain = new SpaceshipCaptain($isJuniorCaptain);
    }

    /**
     * @return Captain
     */
    final public function captain(): Captain
    {
        return $this->captain;
    }

    /**
     * @return SpaceshipProperties
     */
    final public function properties(): SpaceshipProperties
    {
        return $this->loadProperties($this);
    }

    /**
     * @return Strength
     */
    abstract public function strength(): Strength;
}