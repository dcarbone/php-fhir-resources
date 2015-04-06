<?php namespace FHIR\Resources\Clinical\Specimen;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIRSubstance;

/**
 * Class FHIRContainer
 * @package FHIR\Resources\Clinical\Specimen
 */
class FHIRContainer extends AbstractFHIRObject
{
    /** @var FHIRIdentifier[]|ElementCollection */
    protected $identifier;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRQuantity */
    protected $capacity = null;

    /** @var FHIRQuantity */
    protected $specimenQuantity = null;

    /** @var FHIRSubstance */
    protected $additive = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->identifier = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function addIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRString $description
     */
    public function setDescription(FHIRString $description)
    {
        $this->description = $description;
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
     * @return FHIRQuantity
     */
    public function getCapacity()
    {
        return $this->capacity;
    }

    /**
     * @param FHIRQuantity $capacity
     */
    public function setCapacity(FHIRQuantity $capacity)
    {
        $this->capacity = $capacity;
    }

    /**
     * @return FHIRQuantity
     */
    public function getSpecimenQuantity()
    {
        return $this->specimenQuantity;
    }

    /**
     * @param FHIRQuantity $specimenQuantity
     */
    public function setSpecimenQuantity(FHIRQuantity $specimenQuantity)
    {
        $this->specimenQuantity = $specimenQuantity;
    }

    /**
     * @return FHIRSubstance
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * @param FHIRSubstance $additive
     */
    public function setAdditive(FHIRSubstance $additive)
    {
        $this->additive = $additive;
    }
}