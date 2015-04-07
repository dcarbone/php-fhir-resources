<?php namespace FHIR\Resources\Clinical\Observation;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Clinical\FHIRObservation;

/**
 * Class FHIRObservationRelated
 * @package FHIR\Resources\Clinical\Observation
 */
class FHIRObservationRelated extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRObservation */
    protected $target = null;

    /**
     * @return FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCode $type
     */
    public function setType(FHIRCode $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRObservation
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRObservation $target
     */
    public function setTarget(FHIRObservation $target)
    {
        $this->target = $target;
    }
}