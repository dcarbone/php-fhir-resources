<?php namespace FHIR\Resources\Clinical\CarePlan;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Clinical\FHIRDiagnosticOrder;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Clinical\FHIRProcedure;
use FHIR\Resources\Clinical\FHIRMedicationPrescription;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRActivity
 * @package FHIR\Elements\Component
 */
class FHIRActivity extends AbstractFHIRObject
{
    /** @var FHIRGoal[]|ElementCollection */
    protected $goal;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRBoolean */
    protected $prohibited = null;

    /** @var FHIRResource[]|ResourceCollection */
    protected $actionResulting;

    /** @var FHIRString */
    protected $notes = null;

    /** @var FHIRProcedure|FHIRMedicationPrescription|FHIRDiagnosticOrder|FHIREncounter */
    protected $detail = null;

    /** @var FHIRSimple */
    protected $simple = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->goal = new ElementCollection();
        $this->actionResulting = new ResourceCollection();
    }

    /**
     * @return ElementCollection|FHIRGoal[]
     */
    public function getGoal()
    {
        return $this->goal;
    }

    /**
     * @param FHIRGoal $goal
     */
    public function setGoal(FHIRGoal $goal)
    {
        $this->goal->append($goal);
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
     * @return FHIRBoolean
     */
    public function getProhibited()
    {
        return $this->prohibited;
    }

    /**
     * @param FHIRBoolean $prohibited
     */
    public function setProhibited(FHIRBoolean $prohibited)
    {
        $this->prohibited = $prohibited;
    }

    /**
     * @return ResourceCollection|FHIRResource[]
     */
    public function getActionResulting()
    {
        return $this->actionResulting;
    }

    /**
     * @param FHIRResource $actionResulting
     */
    public function setActionResulting(FHIRResource $actionResulting)
    {
        $this->actionResulting->append($actionResulting);
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
     * @return FHIRDiagnosticOrder|\FHIR\Resources\Administrative\FHIREncounter|FHIRMedicationPrescription|FHIRProcedure
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param FHIRDiagnosticOrder|\FHIR\Resources\Administrative\FHIREncounter|FHIRMedicationPrescription|FHIRProcedure $detail
     */
    public function setDetail($detail)
    {
        if ($detail instanceof FHIRDiagnosticOrder ||
            $detail instanceof FHIREncounter ||
            $detail instanceof FHIRMedicationPrescription ||
            $detail instanceof FHIRProcedure)
        {
            $this->detail = $detail;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'detail',
                'FHIRDiagnosticOrder, FHIREncounter, FHIRMedicationPrescription, or FHIRProcedure',
                $detail);
        }
    }

    /**
     * @return FHIRSimple
     */
    public function getSimple()
    {
        return $this->simple;
    }

    /**
     * @param FHIRSimple $simple
     */
    public function setSimple(FHIRSimple $simple)
    {
        $this->simple = $simple;
    }
}