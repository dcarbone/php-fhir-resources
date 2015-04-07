<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\DiagnosticOrder\FHIRDiagnosticOrderEvent;
use FHIR\Resources\Clinical\DiagnosticOrder\FHIRDiagnosticOrderItem;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRDiagnosticOrder
 * @package FHIR\Resources\Clinical
 */
class FHIRDiagnosticOrder extends FHIRIdentifier
{
    /** @var FHIRPatient|FHIRGroup|FHIRLocation|FHIRDevice */
    protected $subject = null;

    /** @var FHIRPractitioner */
    protected $orderer = null;

    /** @var FHIREncounter */
    protected $encounter = null;

    /** @var FHIRString */
    protected $clinicalNotes = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCode */
    protected $priority = null;

    /** @var FHIRDiagnosticOrderItem[]|ResourceComponentCollection */
    protected $item;

    /** @var FHIRDiagnosticOrderEvent[]|ResourceComponentCollection */
    protected $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->item = new ResourceComponentCollection();
        $this->event = new ResourceComponentCollection();
    }

    /**
     * @return FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRLocation ||
            $subject instanceof FHIRPatient)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRQuestionnaireGroup, FHIRConditionLocation, or FHIRPatient',
                $subject);
        }
    }

    /**
     * @return FHIRPractitioner
     */
    public function getOrderer()
    {
        return $this->orderer;
    }

    /**
     * @param FHIRPractitioner $orderer
     */
    public function setOrderer(FHIRPractitioner $orderer)
    {
        $this->orderer = $orderer;
    }

    /**
     * @return FHIREncounter
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * @param FHIREncounter $encounter
     */
    public function setEncounter(FHIREncounter $encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * @return FHIRString
     */
    public function getClinicalNotes()
    {
        return $this->clinicalNotes;
    }

    /**
     * @param FHIRString $clinicalNotes
     */
    public function setClinicalNotes(FHIRString$clinicalNotes)
    {
        $this->clinicalNotes = $clinicalNotes;
    }

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $status
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
    }

    /**
     * @return FHIRCode
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param FHIRCode $priority
     */
    public function setPriority(FHIRCode $priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return ResourceComponentCollection|FHIRDiagnosticOrderItem[]
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return ResourceComponentCollection|FHIRDiagnosticOrderEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRDiagnosticOrderItem $item
     * @param FHIRDiagnosticOrderEvent $event
     */
    public function addItemWithEvent(FHIRDiagnosticOrderItem $item, FHIRDiagnosticOrderEvent $event)
    {
        $item->addEvent($event);
        $this->item->append($item);
        $this->event->append($event);
    }
}