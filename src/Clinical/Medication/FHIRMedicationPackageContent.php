<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRMedicationPackageContent
 * @package FHIR\Resources\Clinical\Medication
 */
class FHIRMedicationPackageContent extends AbstractFHIRObject
{
    /** @var FHIRMedication */
    protected $item = null;

    /** @var FHIRQuantity */
    protected $amount = null;

    /**
     * @return FHIRMedication
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param FHIRMedication $item
     */
    public function setItem(FHIRMedication $item)
    {
        $this->item = $item;
    }

    /**
     * @return FHIRQuantity
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param FHIRQuantity $amount
     */
    public function setAmount(FHIRQuantity $amount)
    {
        $this->amount = $amount;
    }
}