<?php
declare(strict_types=1);

namespace App\StartFleetCommander\Spaceships;

/**
 * Interface SpaceshipProperties
 * @package App\StartFleetCommander\Spaceships
 */
interface SpaceshipProperties
{

    /**
     * @return string
     */
    public function uuid(): string;

    /**
     * @return string
     */
    public function name(): string;

    /**
     * @return bool
     */
    public function isMilitary(): bool;

    /**
     * @return bool
     */
    public function captainIsJunior(): bool;

    /**
     * @return int
     */
    public function rank(): int;

    /**
     * @return array
     */
    public function toArray(): array;
}