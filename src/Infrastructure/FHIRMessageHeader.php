<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Elements\Simple\FHIRId;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\FHIRResourceInterface;
use FHIR\Resources\Infrastructure\MessageHeader\FHIRMessageHeaderMessageDestination;
use FHIR\Resources\Infrastructure\MessageHeader\FHIRMessageHeaderMessageSource;
use FHIR\Resources\Infrastructure\MessageHeader\FHIRMessageHeaderResponse;

/**
 * Class FHIRMessageHeader
 * @package FHIR\Resources\Infrastructure
 */
class FHIRMessageHeader extends  FHIRResource
{
    /** @var FHIRId */
    protected $identifier = null;

    /** @var FHIRInstant */
    protected $timestamp = null;

    /** @var FHIRCoding */
    protected $event = null;

    /** @var FHIRPractitioner */
    protected $enterer = null;

    /** @var FHIRPractitioner */
    protected $author = null;

    /** @var FHIRPractitioner|FHIROrganization */
    protected $receiver = null;

    /** @var FHIRPractitioner|FHIROrganization */
    protected $responsible = null;

    /** @var FHIRCodeableConcept */
    protected $reason = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $data;

    /** @var FHIRMessageHeaderMessageDestination[]|ResourceComponentCollection */
    protected $destination;

    /** @var FHIRMessageHeaderMessageSource */
    protected $source = null;

    /** @var FHIRMessageHeaderResponse */
    protected $response = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->data = new ResourceCollection();
        $this->destination = new ResourceComponentCollection();
    }

    /**
     * @return FHIRId
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRId $identifier
     */
    public function setIdentifier(FHIRId $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param FHIRInstant $timestamp
     */
    public function setTimestamp(FHIRInstant $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return FHIRCoding
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRCoding $event
     */
    public function setEvent(FHIRCoding $event)
    {
        $this->event = $event;
    }

    /**
     * @return FHIRPractitioner
     */
    public function getEnterer()
    {
        return $this->enterer;
    }

    /**
     * @param FHIRPractitioner $enterer
     */
    public function setEnterer(FHIRPractitioner $enterer)
    {
        $this->enterer = $enterer;
    }

    /**
     * @return FHIRPractitioner
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param FHIRPractitioner $author
     */
    public function setAuthor(FHIRPractitioner $author)
    {
        $this->author = $author;
    }

    /**
     * @return FHIROrganization|FHIRPractitioner
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param FHIROrganization|FHIRPractitioner $receiver
     */
    public function setReceiver($receiver)
    {
        if ($receiver instanceof FHIROrganization || $receiver instanceof FHIRPractitioner)
            $this->receiver = $receiver;
        else
            throw $this->createInvalidPropertyValueTypeException('receiver', 'FHIROrganization or FHIRPractitioner', $receiver);
    }

    /**
     * @return FHIROrganization|FHIRPractitioner
     */
    public function getResponsible()
    {
        return $this->responsible;
    }

    /**
     * @param FHIROrganization|FHIRPractitioner $responsible
     */
    public function setResponsible($responsible)
    {
        if ($responsible instanceof FHIROrganization || $responsible instanceof FHIRPractitioner)
            $this->responsible = $responsible;
        else
            throw $this->createInvalidPropertyValueTypeException('responsible', 'FHIRORganization or FHIRPractitioner', $responsible);
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept $reason
     */
    public function setReason(FHIRCodeableConcept $reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @param FHIRResourceInterface $data
     */
    public function addData(FHIRResourceInterface $data)
    {
        $this->data->append($data);
    }

    /**
     * @return ResourceComponentCollection|FHIRMessageHeaderMessageDestination[]
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param FHIRMessageHeaderMessageDestination $destination
     */
    public function addDestination(FHIRMessageHeaderMessageDestination $destination)
    {
        $this->destination->append($destination);
    }

    /**
     * @return FHIRMessageHeaderMessageSource
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRMessageHeaderMessageSource $source
     */
    public function setSource(FHIRMessageHeaderMessageSource $source)
    {
        $this->source = $source;
    }

    /**
     * @return FHIRMessageHeaderResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param FHIRMessageHeaderResponse $response
     */
    public function setResponse(FHIRMessageHeaderResponse $response)
    {
        $this->response = $response;
    }
}