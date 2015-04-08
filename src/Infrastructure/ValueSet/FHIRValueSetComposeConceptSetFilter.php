<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRValueSetComposeConceptSetFilter
 * @package FHIR\Resources\Infrastructure\ValueSet
 */
class FHIRValueSetComposeConceptSetFilter extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $property = null;

    /** @var FHIRCode */
    protected $op = null;

    /** @var FHIRCode */
    protected $value = null;

    /**
     * @return FHIRCode
     */
    public function getProperty()
    {
        return $this->property;
    }

    /**
     * @param FHIRCode $property
     */
    public function setProperty(FHIRCode $property)
    {
        $this->property = $property;
    }

    /**
     * @return FHIRCode
     */
    public function getOp()
    {
        return $this->op;
    }

    /**
     * @param FHIRCode $op
     */
    public function setOp(FHIRCode $op)
    {
        $this->op = $op;
    }

    /**
     * @return FHIRCode
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param FHIRCode $value
     */
    public function setValue(FHIRCode $value)
    {
        $this->value = $value;
    }
}