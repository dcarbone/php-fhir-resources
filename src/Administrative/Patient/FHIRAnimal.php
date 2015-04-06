<?php namespace FHIR\Resources\Administrative\Patient;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRAnimal
 * @package FHIR\Resources\Administrative\Patient
 */
class FHIRAnimal extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $species = null;

    /** @var FHIRCodeableConcept */
    protected $breed = null;

    /** @var FHIRCodeableConcept */
    protected $genderStatus = null;

    /**
     * @return FHIRCodeableConcept
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * @param FHIRCodeableConcept $species
     */
    public function setSpecies(FHIRCodeableConcept $species)
    {
        $this->species = $species;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getBreed()
    {
        return $this->breed;
    }

    /**
     * @param FHIRCodeableConcept $breed
     */
    public function setBreed(FHIRCodeableConcept $breed)
    {
        $this->breed = $breed;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getGenderStatus()
    {
        return $this->genderStatus;
    }

    /**
     * @param FHIRCodeableConcept $genderStatus
     */
    public function setGenderStatus(FHIRCodeableConcept $genderStatus)
    {
        $this->genderStatus = $genderStatus;
    }
}