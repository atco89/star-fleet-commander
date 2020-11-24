<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Score;

/**
 * Interface Score
 * @package App\StartFleetCommander\Score
 */
interface Score
{

    /**
     * @return int
     */
    public function sum(): int;
}