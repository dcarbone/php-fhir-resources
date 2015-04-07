<?php namespace FHIR\Resources\Administrative\Group;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\FHIRRange;
use FHIR\Elements\Primitive\FHIRBoolean;

/**
 * Class FHIRGroupCharacteristic
 * @package FHIR\Resources\Administrative\Group
 */
class FHIRGroupCharacteristic extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRCodeableConcept|FHIRBoolean|FHIRQuantity|FHIRRange */
    protected $value = null;

    /** @var FHIRBoolean */
    protected $exclude = null;

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
     * @return FHIRBoolean|FHIRCodeableConcept|FHIRQuantity|FHIRRange
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param FHIRBoolean|FHIRCodeableConcept|FHIRQuantity|FHIRRange $value
     */
    public function setValue($value)
    {
        if ($value instanceof FHIRBoolean ||
            $value instanceof FHIRCodeableConcept ||
            $value instanceof FHIRQuantity ||
            $value instanceof FHIRRange)
        {
            $this->value = $value;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'value',
                'FHIRBoolean, FHIRCodeableConcept, FHIRQuantity, or FHIRRange',
                $value);
        }
    }

    /**
     * @return FHIRBoolean
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * @param FHIRBoolean $exclude
     */
    public function setExclude(FHIRBoolean $exclude)
    {
        $this->exclude = $exclude;
    }
}