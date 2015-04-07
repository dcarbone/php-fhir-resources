<?php namespace FHIR\Resources\Administrative\Encounter;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Resources\Administrative\FHIRLocation;

/**
 * Class FHIREncounterLocation
 * @package FHIR\Resources\Administrative\Encounter
 */
class FHIREncounterLocation extends AbstractFHIRObject
{
    /** @var FHIRLocation */
    protected $location = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /**
     * @return FHIRLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRLocation $location
     */
    public function setLocation(FHIRLocation $location)
    {
        $this->location = $location;
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }
}