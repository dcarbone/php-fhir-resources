<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Clinical\MedicationAdministration\FHIRMedicationDosage;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRMedicationAdministration
 * @package FHIR\Resources\Clinical
 */
class FHIRMedicationAdministration extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRPatient */
    protected $patient = null;

    /** @var FHIRPractitioner */
    protected $practitioner = null;

    /** @var FHIREncounter */
    protected $encounter = null;

    /** @var FHIRMedicationPrescription */
    protected $prescription = null;

    /** @var FHIRBoolean */
    protected $wasNotGiven = null;

    /** @var FHIRCodeableConcept */
    protected $reasonNotGiven = null;

    /** @var FHIRPeriod */
    protected $whenGiven = null;

    /** @var FHIRMedication */
    protected $medication = null;

    /** @var FHIRDevice[]|ResourceCollection */
    protected $device;

    /** @var FHIRMedicationDosage[]|ResourceComponentCollection */
    protected $dosage;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->device = new ResourceCollection();
        $this->dosage = new ResourceComponentCollection();
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
     * @param FHIRPatient $patient
     */
    public function setPatient(FHIRPatient $patient)
    {
        $this->patient = $patient;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getPractitioner()
    {
        return $this->practitioner;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPractitioner $practitioner
     */
    public function setPractitioner(FHIRPractitioner $practitioner)
    {
        $this->practitioner = $practitioner;
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
     * @return FHIRMedicationPrescription
     */
    public function getPrescription()
    {
        return $this->prescription;
    }

    /**
     * @param FHIRMedicationPrescription $prescription
     */
    public function setPrescription(FHIRMedicationPrescription $prescription)
    {
        $this->prescription = $prescription;
    }

    /**
     * @return FHIRBoolean
     */
    public function getWasNotGiven()
    {
        return $this->wasNotGiven;
    }

    /**
     * @param FHIRBoolean $wasNotGiven
     */
    public function setWasNotGiven(FHIRBoolean $wasNotGiven)
    {
        $this->wasNotGiven = $wasNotGiven;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getReasonNotGiven()
    {
        return $this->reasonNotGiven;
    }

    /**
     * @param FHIRCodeableConcept $reasonNotGiven
     */
    public function setReasonNotGiven(FHIRCodeableConcept $reasonNotGiven)
    {
        $this->reasonNotGiven = $reasonNotGiven;
    }

    /**
     * @return FHIRPeriod
     */
    public function getWhenGiven()
    {
        return $this->whenGiven;
    }

    /**
     * @param FHIRPeriod $whenGiven
     */
    public function setWhenGiven(FHIRPeriod $whenGiven)
    {
        $this->whenGiven = $whenGiven;
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
    public function setMedication(FHIRMedication $medication)
    {
        $this->medication = $medication;
    }

    /**
     * @return ResourceCollection|FHIRDevice[]
     */
    public function getDevice()
    {
        return $this->device;
    }

    /**
     * @param FHIRDevice $device
     */
    public function addDevice(FHIRDevice $device)
    {
        $this->device->append($device);
    }

    /**
     * @return FHIRMedicationDosage[]|ResourceComponentCollection
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * @param FHIRMedicationDosage $dosage
     */
    public function addDosage(FHIRMedicationDosage $dosage)
    {
        $this->dosage->append($dosage);
    }
}