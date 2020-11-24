<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\Strength;

/**
 * Interface Strength
 * @package App\StartFleetCommander\Spaceships\Strength
 */
interface Strength
{

    /**
     * @return int
     */
    public function score(): int;
}