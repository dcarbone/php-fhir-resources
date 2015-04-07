<?php namespace FHIR\Resources\Clinical\Procedure;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\Administrative\FHIRPractitioner;

/**
 * Class FHIRProcedurePerformer
 * @package FHIR\Resources\Clinical\Procedure
 */
class FHIRProcedurePerformer extends AbstractFHIRObject
{
    /** @var \FHIR\Resources\Administrative\FHIRPractitioner */
    protected $person = null;

    /** @var FHIRCodeableConcept */
    protected $role = null;

    /**
     * @return \FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPractitioner $person
     */
    public function setPerson(FHIRPractitioner $person)
    {
        $this->person = $person;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param FHIRCodeableConcept $role
     */
    public function setRole(FHIRCodeableConcept $role)
    {
        $this->role = $role;
    }
}