<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRMedicationProduct
 * @package FHIR\Resources\Clinical\Medication
 */
class FHIRMedicationProduct extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $form = null;

    /** @var FHIRMedicationProductIngredient[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRMedicationProductIngredient[]
     */
    public function getIngredient()
    {
        return $this->ingredient;
    }

    /**
     * @param FHIRMedicationProductIngredient $ingredient
     */
    public function addIngredient(FHIRMedicationProductIngredient $ingredient)
    {
        $this->ingredient->append($ingredient);
    }
}