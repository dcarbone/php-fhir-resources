<?php namespace FHIR\Resources\Clinical\MedicationDispense;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\Administrative\FHIRPractitioner;

/**
 * Class FHIRMedicationDispenseSubstitution
 * @package FHIR\Resources\Clinical\MedicationDispense
 */
class FHIRMedicationDispenseSubstitution extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $reason;

    /** @var FHIRPractitioner[]|ResourceCollection */
    protected $responsibleParty;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->reason = new ElementCollection();
        $this->responsibleParty = new ResourceCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCodeableConcept $type
     */
    public function setType(FHIRCodeableConcept $type)
    {
        $this->type = $type;
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept $reason
     */
    public function addReason(FHIRCodeableConcept $reason)
    {
        $this->reason->append($reason);
    }

    /**
     * @return ResourceCollection|FHIRPractitioner[]
     */
    public function getResponsibleParty()
    {
        return $this->responsibleParty;
    }

    /**
     * @param FHIRPractitioner $responsibleParty
     */
    public function addResponsibleParty(FHIRPractitioner $responsibleParty)
    {
        $this->responsibleParty->append($responsibleParty);
    }
}