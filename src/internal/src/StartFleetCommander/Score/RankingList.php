<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Score;

/**
 * Interface RankingList
 * @package App\StartFleetCommander\Score
 */
interface RankingList
{

    /**
     * Spaceship type.
     */
    const MILITARY_SPACESHIP = 50;
    const CIVILIAN_SPACESHIP = 10;

    /**
     * Captain rank.
     */
    const CAPTAIN = 30;
    const JUNIOR_CAPTAIN = 10;

    /**
     * Strength score.
     */
    const STRONG = 50;
    const MEDIUM = 25;
    const WEAK = 10;
}