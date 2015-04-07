<?php namespace FHIR\Resources\Administrative\Encounter;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Resources\Administrative\FHIRLocation;

/**
 * Class FHIREncounterAccomodation
 * @package FHIR\Resources\Administrative\Encounter
 */
class FHIREncounterAccomodation extends AbstractFHIRObject
{
    /** @var FHIRLocation */
    protected $bed = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /**
     * @return FHIRLocation
     */
    public function getBed()
    {
        return $this->bed;
    }

    /**
     * @param FHIRLocation $bed
     */
    public function setBed(FHIRLocation $bed)
    {
        $this->bed = $bed;
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