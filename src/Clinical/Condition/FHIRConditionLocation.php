<?php namespace FHIR\Resources\Clinical\Condition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRConditionLocation
 * @package FHIR\Resources\Clinical\Condition
 */
class FHIRConditionLocation extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRString */
    protected $detail = null;

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
     * @return FHIRString
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param FHIRString $detail
     */
    public function setDetail(FHIRString $detail)
    {
        $this->detail = $detail;
    }
}