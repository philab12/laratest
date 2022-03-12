<?php
namespace App\Services\Geolocation;

use App\Services\Map\Map;
use App\Services\Satellite\Satellite;

class Geolocation
{
    // private $map;
    // private $satellite;

    public function __construct(private Map $map, private Satellite $satellite){}

    public function search(string $name) {
        
        $locationInfo = $this->map->findAddress($name);
        return $this->satellite->pinpoint($locationInfo);
    }
}

?>