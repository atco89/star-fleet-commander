<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships\Strength;

use App\StartFleetCommander\Score\RankingList;

/**
 * Class Medium
 * @package App\StartFleetCommander\Spaceships\Strength
 */
class Medium implements Strength
{

    /**
     * @return int
     */
    public function score(): int
    {
        return RankingList::MEDIUM;
    }
}