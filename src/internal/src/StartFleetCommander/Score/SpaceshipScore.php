<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Score;

use App\StartFleetCommander\Spaceships\Spaceship;

/**
 * Class SpaceshipScore
 * @package App\StartFleetCommander\Score
 */
class SpaceshipScore implements Score
{

    /**
     * @var Spaceship
     */
    protected Spaceship $spaceship;

    /**
     * SpaceshipScore constructor.
     * @param Spaceship $spaceship
     */
    public function __construct(Spaceship $spaceship)
    {
        $this->spaceship = $spaceship;
    }

    /**
     * @return int
     */
    final public function sum(): int
    {
        return array_sum([$this->spaceshipPurpose(), $this->spaceshipCaptainRank(), $this->spaceshipStrength()]);
    }

    /**
     * @return int
     */
    protected function spaceshipPurpose(): int
    {
        return $this->spaceship->properties()->isMilitary()
            ? RankingList::MILITARY_SPACESHIP
            : RankingList::CIVILIAN_SPACESHIP;
    }

    /**
     * @return int
     */
    protected function spaceshipCaptainRank(): int
    {
        return $this->spaceship->properties()->captainIsJunior() ? RankingList::JUNIOR_CAPTAIN : RankingList::CAPTAIN;
    }

    /**
     * @return int
     */
    protected function spaceshipStrength(): int
    {
        return $this->spaceship->strength()->score();
    }
}