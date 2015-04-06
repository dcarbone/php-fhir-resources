<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Clinical\CarePlan\FHIRActivity;
use FHIR\Resources\Clinical\CarePlan\FHIRGoal;
use FHIR\Resources\Clinical\CarePlan\FHIRParticipant;

/**
 * Class FHIRCarePlan
 * @package FHIR\Resource
 */
class FHIRCarePlan extends AbstractFHIRIdentifiableResource
{
    // TODO Implement http://www.hl7.org/implement/standards/fhir/care-plan-status.html

    /** @var FHIRPatient */
    protected $patient = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRDateTime */
    protected $modified = null;

    /** @var FHIRCondition[]|ResourceCollection */
    protected $concern;

    /** @var FHIRString */
    protected $notes = null;

    /** @var FHIRGoal[]|ResourceComponentCollection */
    protected $goal;

    /** @var FHIRActivity[]|ResourceComponentCollection */
    protected $activity;

    /** @var FHIRParticipant[]|ResourceComponentCollection */
    protected $participant;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->concern = new ResourceCollection();
        $this->goal = new ResourceComponentCollection();
        $this->activity = new ResourceComponentCollection();
        $this->participant = new ResourceComponentCollection();
    }

    /**
     * @return FHIRPatient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param FHIRPatient $patient
     */
    public function setPatient(FHIRPatient $patient)
    {
        $this->patient = $patient;
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
     * @return FHIRDateTime
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param FHIRDateTime $modified
     */
    public function setModified(FHIRDateTime $modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return ResourceCollection|FHIRCondition[]
     */
    public function getConcern()
    {
        return $this->concern;
    }

    /**
     * @param FHIRCondition $concern
     */
    public function addConcern(FHIRCondition $concern)
    {
        $this->concern->append($concern);
    }

    /**
     * @return FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param FHIRString $notes
     */
    public function setNotes(FHIRString $notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return ResourceComponentCollection|FHIRGoal[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * @param FHIRGoal $goal
     */
    public function addGoal(FHIRGoal $goal)
    {
        $this->goal->append($goal);
    }

    /**
     * @return ResourceComponentCollection|FHIRActivity[]
     */
    public function getActivity()
    {
        return $this->activity;
    }

    /**
     * @param FHIRActivity $activity
     */
    public function addActivity(FHIRActivity $activity)
    {
        $this->activity->append($activity);
    }

    /**
     * @return ResourceComponentCollection|FHIRParticipant[]
     */
    public function getParticipant()
    {
        return $this->participant;
    }

    /**
     * @param FHIRParticipant $participant
     */
    public function addParticipant(FHIRParticipant $participant)
    {
        $this->participant->append($participant);
    }
}