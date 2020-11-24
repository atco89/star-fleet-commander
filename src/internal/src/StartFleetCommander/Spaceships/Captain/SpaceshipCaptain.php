<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\Captain;

/**
 * Class SpaceshipCaptain
 * @package App\StartFleetCommander\Spaceships\Captain
 */
class SpaceshipCaptain implements Captain
{

    /**
     * @var bool
     */
    protected bool $isJunior;

    /**
     * SpaceshipCaptain constructor.
     * @param bool $isJunior
     */
    public function __construct(bool $isJunior)
    {
        $this->isJunior = $isJunior;
    }

    /**
     * @return bool
     */
    public function isJuniorRank(): bool
    {
        return $this->isJunior;
    }
}