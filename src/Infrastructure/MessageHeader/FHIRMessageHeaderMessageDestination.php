<?php namespace FHIR\Resources\Infrastructure\MessageHeader;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Resources\Administrative\FHIRDevice;

/**
 * Class FHIRMessageHeaderMessageDestination
 * @package FHIR\Resources\Infrastructure\MessageHeader
 */
class FHIRMessageHeaderMessageDestination extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRDevice */
    protected $target = null;

    /** @var FHIRUri */
    protected $endpoint = null;

    /**
     * @return FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRString $name
     */
    public function setName(FHIRString $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRDevice
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRDevice $target
     */
    public function setTarget(FHIRDevice $target)
    {
        $this->target = $target;
    }

    /**
     * @return FHIRUri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param FHIRUri $endpoint
     */
    public function setEndpoint(FHIRUri $endpoint)
    {
        $this->endpoint = $endpoint;
    }
}