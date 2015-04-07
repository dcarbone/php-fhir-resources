<?php namespace FHIR\Resources\Clinical\Immunization;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRImmunizationExplanation
 * @package FHIR\Resources\Clinical\Immunization
 */
class FHIRImmunizationExplanation extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $reason;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $refusalReason;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reason = new ElementCollection();
        $this->refusalReason = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept $reason
     */
    public function addReason(FHIRCodeableConcept $reason)
    {
        $this->reason->append($reason);
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getRefusalReason()
    {
        return $this->refusalReason;
    }

    /**
     * @param FHIRCodeableConcept $refusalReason
     */
    public function addRefusalReason(FHIRCodeableConcept $refusalReason)
    {
        $this->refusalReason->append($refusalReason);
    }
}