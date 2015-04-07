<?php namespace FHIR\Resources\Infrastructure\DocumentReference;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;

/**
 * Class FHIRDocumentReferenceContext
 * @package FHIR\Resources\Infrastructure\DocumentReference
 */
class FHIRDocumentReferenceContext extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $event;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRCodeableConcept */
    protected $facilityType = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->event = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRCodeableConcept $event
     */
    public function addEvent(FHIRCodeableConcept $event)
    {
        $this->event = $event;
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

    /**
     * @return FHIRCodeableConcept
     */
    public function getFacilityType()
    {
        return $this->facilityType;
    }

    /**
     * @param FHIRCodeableConcept $facilityType
     */
    public function setFacilityType(FHIRCodeableConcept $facilityType)
    {
        $this->facilityType = $facilityType;
    }
}