<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Clinical\MedicationStatement\FHIRMedicationStatementDosage;

/**
 * Class FHIRMedicationStatement
 * @package FHIR\Resources\Clinical
 */
class FHIRMedicationStatement extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRPatient */
    protected $patient = null;

    /** @var FHIRBoolean */
    protected $wasNotGiven = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $reasonNotGiven;

    /** @var FHIRPeriod */
    protected $whenGiven = null;

    /** @var FHIRMedication */
    protected $medication = null;

    /** @var FHIRDevice[]|ResourceCollection */
    protected $device;

    /** @var FHIRMedicationStatementDosage[]|ResourceComponentCollection */
    protected $dosage;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->reasonNotGiven = new ElementCollection();
        $this->device = new ResourceCollection();
        $this->dosage = new ResourceComponentCollection();
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
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getReasonNotGiven()
    {
        return $this->reasonNotGiven;
    }

    /**
     * @param FHIRCodeableConcept $reasonNotGiven
     */
    public function addReasonNotGiven(FHIRCodeableConcept $reasonNotGiven)
    {
        $this->reasonNotGiven->append($reasonNotGiven);
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
     * @return ResourceComponentCollection|FHIRMedicationStatementDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * @param FHIRMedicationStatementDosage $dosage
     */
    public function addDosage(FHIRMedicationStatementDosage $dosage)
    {
        $this->dosage->append($dosage);
    }
}