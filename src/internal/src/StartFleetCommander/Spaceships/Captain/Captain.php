<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\Captain;

/**
 * Interface Captain
 * @package App\StartFleetCommander\Spaceships\Captain
 */
interface Captain
{

    /**
     * @return bool
     */
    public function isJuniorRank(): bool;
}