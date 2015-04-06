<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRProduct
 * @package FHIR\Elements\Component
 */
class FHIRProduct extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $form = null;

    /** @var FHIRIngredient[]|ResourceComponentCollection */
    protected $ingredient;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->ingredient = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * @param FHIRCodeableConcept $form
     */
    public function setForm(FHIRCodeableConcept $form)
    {
        $this->form = $form;
    }

    /**
     * @return ResourceComponentCollection|FHIRIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param FHIRIngredient $ingredient
     */
    public function addIngredient(FHIRIngredient $ingredient)
    {
        $this->ingredient->append($ingredient);
    }
}