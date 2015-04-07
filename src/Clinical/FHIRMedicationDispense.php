<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\MedicationDispense\FHIRMedicationDispenseDispense;
use FHIR\Resources\Clinical\MedicationDispense\FHIRMedicationDispenseSubstitution;

/**
 * Class FHIRMedicationDispense
 * @package FHIR\Resources\Clinical
 */
class FHIRMedicationDispense extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCode */
    protected $status = null;

    /** @var \FHIR\Resources\Administrative\FHIRPatient */
    protected $patient = null;

    /** @var \FHIR\Resources\Administrative\FHIRPractitioner */
    protected $dispenser = null;

    /** @var FHIRMedicationPrescription[]|ResourceCollection */
    protected $authorizingPrescription;

    /** @var FHIRMedicationDispenseDispense[]|ResourceComponentCollection */
    protected $dispense;

    /** @var FHIRMedicationDispenseSubstitution */
    protected $substitution = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->authorizingPrescription = new ResourceCollection();
        $this->dispense = new ResourceComponentCollection();
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
     * @return \FHIR\Resources\Administrative\FHIRPatient
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
     * @return \FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getDispenser()
    {
        return $this->dispenser;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPractitioner $dispenser
     */
    public function setDispenser(FHIRPractitioner $dispenser)
    {
        $this->dispenser = $dispenser;
    }

    /**
     * @return ResourceCollection|FHIRMedicationPrescription[]
     */
    public function getAuthorizingPrescription()
    {
        return $this->authorizingPrescription;
    }

    /**
     * @param FHIRMedicationPrescription $authorizingPrescription
     */
    public function addAuthorizingPrescription(FHIRMedicationPrescription $authorizingPrescription)
    {
        $this->authorizingPrescription->append($authorizingPrescription);
    }

    /**
     * @return ResourceComponentCollection|FHIRMedicationDispenseDispense[]
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * @param FHIRMedicationDispenseDispense $dispense
     */
    public function addDispense(FHIRMedicationDispenseDispense $dispense)
    {
        $this->dispense->append($dispense);
    }

    /**
     * @return FHIRMedicationDispenseSubstitution
     */
    public function getSubstitution()
    {
        return $this->substitution;
    }

    /**
     * @param FHIRMedicationDispenseSubstitution $substitution
     */
    public function setSubstitution(FHIRMedicationDispenseSubstitution $substitution)
    {
        $this->substitution = $substitution;
    }
}