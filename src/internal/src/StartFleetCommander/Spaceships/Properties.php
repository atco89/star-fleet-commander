<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships;

use App\StartFleetCommander\Score\SpaceshipScore;
use App\StartFleetCommander\Spaceships\MilitarySpaceships\MilitarySpaceship;
use Ramsey\Uuid\Uuid;
use ReflectionClass;

/**
 * Trait Properties
 * @package App\StartFleetCommander\Spaceships
 */
trait Properties
{

    /**
     * Properties constructor.
     */
    private function __construct()
    {
    }

    /**
     * @param Spaceship $spaceship
     * @return SpaceshipProperties
     */
    final public function loadProperties(Spaceship $spaceship): SpaceshipProperties
    {
        return new class($spaceship) implements SpaceshipProperties {

            /**
             * @var Spaceship
             */
            protected Spaceship $spaceship;

            /**
             *  constructor.
             * @param Spaceship $spaceship
             */
            public function __construct(Spaceship $spaceship)
            {
                $this->spaceship = $spaceship;
            }

            /**
             * @return string
             */
            public function uuid(): string
            {
                return Uuid::uuid4()->toString();
            }

            /**
             * @return string
             */
            public function name(): string
            {
                $reflectionClass = new ReflectionClass($this->spaceship);
                return $reflectionClass->getShortName();
            }

            /**
             * @return bool
             */
            public function isMilitary(): bool
            {
                return $this->spaceship instanceof MilitarySpaceship;
            }

            /**
             * @return bool
             */
            public function captainIsJunior(): bool
            {
                return $this->spaceship->captain()->isJuniorRank();
            }

            /**
             * @return int
             */
            public function rank(): int
            {
                $score = new SpaceshipScore($this->spaceship);
                return $score->sum();
            }

            /**
             * @return array
             */
            public function toArray(): array
            {
                return [
                    'uuid'     => $this->uuid(),
                    'name'     => $this->name(),
                    'military' => $this->isMilitary(),
                    'junior'   => $this->captainIsJunior(),
                    'rank'     => $this->rank(),
                ];
            }
        };
    }
}