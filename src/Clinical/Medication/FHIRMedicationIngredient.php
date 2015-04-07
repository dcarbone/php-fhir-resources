<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRRatio;
use FHIR\Resources\Administrative\FHIRSubstance;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRMedicationIngredient
 * @package FHIR\Resources\Clinical
 */
class FHIRMedicationIngredient extends AbstractFHIRObject
{
    /** @var FHIRSubstance|FHIRMedication */
    protected $item = null;

    /** @var FHIRRatio */
    protected $amount = null;

    /**
     * @return FHIRMedication|FHIRSubstance
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param FHIRMedication|FHIRSubstance $item
     */
    public function setItem($item)
    {
        if ($item instanceof FHIRMedication || $item instanceof FHIRSubstance)
            $this->item = $item;
        else
            throw $this->createInvalidPropertyValueTypeException('item', 'FHIRMedication or FHIRSubstance', $item);
    }

    /**
     * @return FHIRRatio
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param FHIRRatio $amount
     */
    public function setAmount(FHIRRatio $amount)
    {
        $this->amount = $amount;
    }
}