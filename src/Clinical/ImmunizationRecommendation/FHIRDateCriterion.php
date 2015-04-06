<?php namespace FHIR\Resources\Clinical\ImmunizationRecommendation;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;

/**
 * Class FHIRDateCriterion
 * @package FHIR\Resources\Clinical\ImmunizationRecommendation
 */
class FHIRDateCriterion extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRDateTime */
    protected $value = null;

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
     * @return FHIRDateTime
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param FHIRDateTime $value
     */
    public function setValue(FHIRDateTime $value)
    {
        $this->value = $value;
    }
}