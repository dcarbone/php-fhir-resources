<?php namespace FHIR\Resources\Infrastructure\SecurityEvent;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRBase64Binary;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRSecurityEventDetail
 * @package FHIR\Resources\Infrastructure\SecurityEvent
 */
class FHIRSecurityEventDetail extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $type = null;

    /** @var FHIRBase64Binary */
    protected $value = null;

    /**
     * @return FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRString $type
     */
    public function setType(FHIRString $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRBase64Binary
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param FHIRBase64Binary $value
     */
    public function setValue(FHIRBase64Binary $value)
    {
        $this->value = $value;
    }
}