<?php namespace FHIR\Resources\Administrative\Encounter;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;

/**
 * Class FHIREncounterParticipant
 * @package FHIR\Resources\Administrative\Encounter
 */
class FHIREncounterParticipant extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRPractitioner|FHIRRelatedPerson */
    protected $individual = null;

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
     * @return FHIRPractitioner|FHIRRelatedPerson
     */
    public function getIndividual()
    {
        return $this->individual;
    }

    /**
     * @param FHIRPractitioner|FHIRRelatedPerson $individual
     */
    public function setIndividual($individual)
    {
        if ($individual instanceof FHIRPractitioner || $individual instanceof FHIRRelatedPerson)
            $this->individual = $individual;
        else
            throw $this->createInvalidPropertyValueTypeException('individual', 'FHIRPractitioner or FHIRRelatedPerson', $individual);
    }
}