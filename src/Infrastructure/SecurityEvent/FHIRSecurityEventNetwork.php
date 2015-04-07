<?php namespace FHIR\Resources\Infrastructure\SecurityEvent;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRSecurityEventNetwork
 * @package FHIR\Resources\Infrastructure\SecurityEvent
 */
class FHIRSecurityEventNetwork extends AbstractFHIRObject
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRCode */
    protected $type = null;

    /**
     * @return FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function setIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }

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
}