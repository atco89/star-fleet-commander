<?php
declare(strict_types=1);

namespace App\StartFleetCommander;

use App\StartFleetCommander\Formation\Formation;
use App\StartFleetCommander\Spaceships\CivilianSpaceships\Recreation;
use App\StartFleetCommander\Spaceships\CivilianSpaceships\Transport;
use App\StartFleetCommander\Spaceships\MilitarySpaceships\Dreadnought;
use App\StartFleetCommander\Spaceships\MilitarySpaceships\Interceptor;
use App\StartFleetCommander\Spaceships\MilitarySpaceships\Leviathan;
use App\StartFleetCommander\Spaceships\Spaceship;
use OpenAPI\Server\Model\SpaceshipRequest;
use OpenAPI\Server\Model\SpaceshipResponse;

/**
 * Class FleetBuilder
 * @package App\StartFleetCommander
 */
final class FleetBuilder
{

    /**
     * @var Formation
     */
    protected Formation $formation;

    /**
     * @var SpaceshipRequest[]
     */
    protected array $spaceshipRequests;

    /**
     * @var string[]
     */
    protected array $spaceshipModels;

    /**
     * @var Spaceship[]
     */
    protected array $fleet;

    /**
     * FleetBuilder constructor.
     * @param Formation $formation
     * @param SpaceshipRequest[] $spaceshipRequests
     */
    public function __construct(Formation $formation, array $spaceshipRequests)
    {
        $this->formation = $formation;
        $this->spaceshipRequests = $spaceshipRequests;
        $this->spaceshipModels = $this->loadSpaceshipModels();
    }

    /**
     * @return SpaceshipResponse[]
     */
    public function build(): array
    {
        foreach ($this->spaceshipRequests as $spaceship) {
            for ($i = 0; $i < $spaceship->getQuantity(); $i++) {
                $spaceshipModel = $this->spaceshipModels[$spaceship->getSpaceship()];
                $this->addSpaceship(new $spaceshipModel($spaceship->isCaptainJunior()));
            }
        }
        return $this->map();
    }

    /**
     * @return array
     */
    protected function loadSpaceshipModels(): array
    {
        return [
            'interceptor' => Interceptor::class,
            'dreadnought' => Dreadnought::class,
            'leviathan'   => Leviathan::class,
            'transport'   => Transport::class,
            'recreation'  => Recreation::class,
        ];
    }

    /**
     * @param Spaceship $spaceship
     * @return FleetBuilder
     */
    protected function addSpaceship(Spaceship $spaceship): FleetBuilder
    {
        $this->fleet[] = $spaceship;
        return $this;
    }

    /**
     * @return SpaceshipResponse[]
     */
    protected function map(): array
    {
        return array_map(function (Spaceship $spaceship): SpaceshipResponse {
            return new SpaceshipResponse($spaceship->properties()->toArray());
        }, $this->formation->take($this->fleet));
    }
}