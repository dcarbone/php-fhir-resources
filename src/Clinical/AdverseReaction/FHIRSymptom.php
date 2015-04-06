<?php namespace FHIR\Resources\Clinical\AdverseReaction;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRSymptom
 * @package FHIR\Elements\Component
 */
class FHIRSymptom extends AbstractFHIRObject
{
    // TODO Implement http://www.hl7.org/implement/standards/fhir/reactionSeverity.html

    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRCode */
    protected $severity = null;

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRCode
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @param FHIRCode $severity
     */
    public function setSeverity(FHIRCode $severity)
    {
        $this->severity = $severity;
    }
}