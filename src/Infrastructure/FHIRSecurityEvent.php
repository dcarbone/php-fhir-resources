<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\SecurityEvent\FHIRSecurityEventEvent;
use FHIR\Resources\Infrastructure\SecurityEvent\FHIRSecurityEventObject;
use FHIR\Resources\Infrastructure\SecurityEvent\FHIRSecurityEventParticipant;
use FHIR\Resources\Infrastructure\SecurityEvent\FHIRSecurityEventSource;

class FHIRSecurityEvent extends FHIRResource
{
    /** @var FHIRSecurityEventEvent */
    protected $event = null;

    /** @var FHIRSecurityEventSource */
    protected $source = null;

    /** @var FHIRSecurityEventObject[]|ResourceComponentCollection */
    protected $object;

    /** @var FHIRSecurityEventParticipant[]|ResourceComponentCollection */
    protected $participant;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->object = new ResourceComponentCollection();
        $this->participant = new ResourceComponentCollection();
    }

    /**
     * @return FHIRSecurityEventEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRSecurityEventEvent $event
     */
    public function setEvent(FHIRSecurityEventEvent $event)
    {
        $this->event = $event;
    }

    /**
     * @return FHIRSecurityEventSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRSecurityEventSource $source
     */
    public function setSource(FHIRSecurityEventSource $source)
    {
        $this->source = $source;
    }

    /**
     * @return ResourceComponentCollection|FHIRSecurityEventObject[]
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @param FHIRSecurityEventObject $object
     */
    public function addObject(FHIRSecurityEventObject $object)
    {
        $this->object->append($object);
    }

    /**
     * @return ResourceComponentCollection|FHIRSecurityEventParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param FHIRSecurityEventParticipant $participant
     */
    public function addParticipant(FHIRSecurityEventParticipant $participant)
    {
        $this->participant->append($participant);
    }
}