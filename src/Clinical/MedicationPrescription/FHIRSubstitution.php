<?php namespace FHIR\Resources\Clinical\MedicationPrescription;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRSubstitution
 * @package FHIR\Elements\Component
 */
class FHIRSubstitution extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept */
    protected $reason = null;

    /**
     * @return FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCodeableConcept $type
     */
    public function setType(FHIRCodeableConcept $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept $reason
     */
    public function setReason(FHIRCodeableConcept $reason)
    {
        $this->reason = $reason;
    }
}