<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\Quantity\FHIRDuration;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Encounter\FHIREncounterHospitalization;
use FHIR\Resources\Administrative\Encounter\FHIREncounterLocation;
use FHIR\Resources\Administrative\Encounter\FHIREncounterParticipant;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIREncounter
 * @package FHIR\Resources\Administrative
 */
class FHIREncounter extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCode */
    protected $class = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $type;

    /** @var FHIRPatient */
    protected $subject = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRDuration */
    protected $length = null;

    /** @var FHIRCodeableConcept */
    protected $reason = null;

    /** @var FHIRResourceInterface */
    protected $indication = null;

    /** @var FHIRCodeableConcept */
    protected $priority = null;

    /** @var FHIROrganization */
    protected $serviceProvider = null;

    /** @var FHIREncounter */
    protected $partOf = null;

    /** @var FHIREncounterLocation[]|ResourceComponentCollection */
    protected $location;

    /** @var FHIREncounterHospitalization */
    protected $hospitalization = null;

    /** @var FHIREncounterParticipant[]|ResourceComponentCollection */
    protected $participant;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->type = new ElementCollection();
        $this->location = new ResourceComponentCollection();
        $this->participant = new ResourceComponentCollection();
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
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param FHIRCode $class
     */
    public function setClass(FHIRCode $class)
    {
        $this->class = $class;
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCodeableConcept $type
     */
    public function addType(FHIRCodeableConcept $type)
    {
        $this->type->append($type);
    }

    /**
     * @return FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }

    /**
     * @return FHIRDuration
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param FHIRDuration $length
     */
    public function setLength(FHIRDuration $length)
    {
        $this->length = $length;
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
     * @return FHIRResourceInterface
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * @param FHIRResourceInterface $indication
     */
    public function setIndication(FHIRResourceInterface $indication)
    {
        $this->indication = $indication;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * @param FHIRCodeableConcept $priority
     */
    public function setPriority(FHIRCodeableConcept $priority)
    {
        $this->priority = $priority;
    }

    /**
     * @return FHIROrganization
     */
    public function getServiceProvider()
    {
        return $this->serviceProvider;
    }

    /**
     * @param FHIROrganization $serviceProvider
     */
    public function setServiceProvider(FHIROrganization $serviceProvider)
    {
        $this->serviceProvider = $serviceProvider;
    }

    /**
     * @return FHIREncounter
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * @param FHIREncounter $partOf
     */
    public function setPartOf(FHIREncounter $partOf)
    {
        $this->partOf = $partOf;
    }

    /**
     * @return ResourceComponentCollection|FHIREncounterLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIREncounterLocation $location
     */
    public function addLocation(FHIREncounterLocation $location)
    {
        $this->location->append($location);
    }

    /**
     * @return FHIREncounterHospitalization
     */
    public function getHospitalization()
    {
        return $this->hospitalization;
    }

    /**
     * @param FHIREncounterHospitalization $hospitalization
     */
    public function setHospitalization(FHIREncounterHospitalization $hospitalization)
    {
        $this->hospitalization = $hospitalization;
    }

    /**
     * @return ResourceComponentCollection|FHIREncounterParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param FHIREncounterParticipant $participant
     */
    public function addParticipant(FHIREncounterParticipant $participant)
    {
        $this->participant->append($participant);
    }
}