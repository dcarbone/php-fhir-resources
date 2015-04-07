<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\Substance\FHIRSubstanceIngredient;
use FHIR\Resources\Administrative\Substance\FHIRSubstanceInstance;
use FHIR\Resources\FHIRResource;

/**
 * Class FHIRSubstance
 * @package FHIR\Resources\Administrative
 */
class FHIRSubstance extends FHIRResource
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRSubstanceInstance */
    protected $instance = null;

    /** @var FHIRSubstanceIngredient[]|ResourceComponentCollection */
    protected $ingredient;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->ingredient = new ResourceComponentCollection();
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
     * @return FHIRSubstanceInstance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param FHIRSubstanceInstance $instance
     */
    public function setInstance(FHIRSubstanceInstance $instance)
    {
        $this->instance = $instance;
    }

    /**
     * @return ResourceComponentCollection|FHIRSubstanceIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param FHIRSubstanceIngredient $ingredient
     */
    public function addIngredient(FHIRSubstanceIngredient $ingredient)
    {
        $this->ingredient->append($ingredient);
    }
}