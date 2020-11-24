<?php
declare(strict_types=1);

namespace App\StarFleetCommanderBundle\FleetBundle\Api;

use App\StartFleetCommander\FleetBuilder;
use App\StartFleetCommander\Formation\Attack;
use App\StartFleetCommander\Formation\Escort;
use OpenAPI\Server\Api\DefaultApiInterface;
use OpenAPI\Server\Model\SpaceshipResponse;

/**
 * Class DefaultApi
 * @package App\StarFleetCommanderBundle\FleetBundle\Api
 */
class StarFleetCommanderApi implements DefaultApiInterface
{

    /**
     * @param string $formation
     * @param array|null $spaceshipRequest
     * @param int $responseCode
     * @param array $responseHeaders
     * @return SpaceshipResponse[]
     */
    public function buildFleet($formation, array $spaceshipRequest = null, &$responseCode, array &$responseHeaders)
    {
        $takeFormation = $formation === 'attack' ? new Attack() : new Escort();
        $fleetBuilder = new FleetBuilder($takeFormation, $spaceshipRequest);
        return $fleetBuilder->build();
    }
}