<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRConformanceMessaging
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceMessaging extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $endpoint = null;

    /** @var FHIRInteger */
    protected $reliableCache = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRConformanceEvent[]|ResourceComponentCollection */
    protected $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->event = new ResourceComponentCollection();
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

    /**
     * @return FHIRInteger
     */
    public function getReliableCache()
    {
        return $this->reliableCache;
    }

    /**
     * @param FHIRInteger $reliableCache
     */
    public function setReliableCache(FHIRInteger $reliableCache)
    {
        $this->reliableCache = $reliableCache;
    }

    /**
     * @return FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param FHIRString $documentation
     */
    public function setDocumentation(FHIRString $documentation)
    {
        $this->documentation = $documentation;
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRConformanceEvent $event
     */
    public function addEvent(FHIRConformanceEvent $event)
    {
        $this->event->append($event);
    }
}