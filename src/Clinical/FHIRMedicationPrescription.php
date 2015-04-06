<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Clinical\MedicationPrescription\FHIRDispense;
use FHIR\Resources\Clinical\MedicationPrescription\FHIRDosageInstruction;
use FHIR\Resources\Clinical\MedicationPrescription\FHIRSubstitution;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRMedicationPrescription
 * @package FHIR\Resources\Clinical
 */
class FHIRMedicationPrescription extends FHIRResource
{
    /** @var FHIRDateTime */
    protected $dateWritten = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRPatient */
    protected $patient = null;

    /** @var \FHIR\Resources\Administrative\FHIRPractitioner */
    protected $prescriber = null;

    /** @var FHIREncounter */
    protected $encounter = null;

    /** @var FHIRCodeableConcept|FHIRCondition */
    protected $reason = null;

    /** @var FHIRMedication */
    protected $medication = null;

    /** @var FHIRSubstitution */
    protected $substitution = null;

    /** @var FHIRDosageInstruction[]|ResourceComponentCollection */
    protected $dosageInstruction;

    /** @var FHIRDispense */
    protected $dispense = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->dosageInstruction = new ResourceComponentCollection();
    }

    /**
     * @return FHIRDateTime
     */
    public function getDateWritten()
    {
        return $this->dateWritten;
    }

    /**
     * @param FHIRDateTime $dateWritten
     */
    public function setDateWritten(FHIRDateTime $dateWritten)
    {
        $this->dateWritten = $dateWritten;
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
     * @return FHIRPatient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPatient $patient
     */
    public function setPatient(FHIRPatient $patient)
    {
        $this->patient = $patient;
    }

    /**
     * @return FHIRPractitioner
     */
    public function getPrescriber()
    {
        return $this->prescriber;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPractitioner $prescriber
     */
    public function setPrescriber(FHIRPractitioner $prescriber)
    {
        $this->prescriber = $prescriber;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIREncounter $encounter
     */
    public function setEncounter(FHIREncounter $encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * @return FHIRCodeableConcept|\FHIR\Resources\Clinical\FamilyHistory\FHIRCondition
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept|\FHIR\Resources\Clinical\FamilyHistory\FHIRCondition $reason
     */
    public function setReason($reason)
    {
        if ($reason instanceof FHIRCodeableConcept ||
            $reason instanceof FHIRCondition)
        {
            $this->reason = $reason;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'reason',
                'FHIRCodeableConcept or FHIRCondition',
                $reason
            );
        }
    }

    /**
     * @return FHIRMedication
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * @param FHIRMedication $medication
     */
    public function setMedication(FHIRMedication$medication)
    {
        $this->medication = $medication;
    }

    /**
     * @return FHIRSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * @param FHIRSubstitution $substitution
     */
    public function setSubstitution(FHIRSubstitution $substitution)
    {
        $this->substitution = $substitution;
    }

    /**
     * @return FHIRDosageInstruction[]|ResourceComponentCollection
     */
    public function getDosageInstruction()
    {
        return $this->dosageInstruction;
    }

    /**
     * @param FHIRDosageInstruction $dosageInstruction
     */
    public function addDosageInstruction(FHIRDosageInstruction $dosageInstruction)
    {
        $this->dosageInstruction->append($dosageInstruction);
    }

    /**
     * @return FHIRDispense
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * @param \FHIR\Resources\Clinical\MedicationPrescription\FHIRDispense $dispense
     */
    public function setDispense(FHIRDispense $dispense)
    {
        $this->dispense = $dispense;
    }
}