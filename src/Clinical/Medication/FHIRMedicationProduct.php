<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRMedicationProduct
 * @package FHIR\Resources\Clinical
 */
class FHIRMedicationProduct extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $form = null;

    /** @var FHIRMedicationIngredient[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRMedicationIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param FHIRMedicationIngredient $ingredient
     */
    public function addIngredient(FHIRMedicationIngredient $ingredient)
    {
        $this->ingredient->append($ingredient);
    }
}