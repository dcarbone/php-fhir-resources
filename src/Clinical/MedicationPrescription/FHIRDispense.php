<?php namespace FHIR\Resources\Clinical\MedicationPrescription;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\Quantity\FHIRDuration;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRDispense
 * @package FHIR\Elements\Component
 */
class FHIRDispense extends AbstractFHIRObject
{
    /** @var FHIRMedication */
    protected $medication = null;

    /** @var FHIRPeriod */
    protected $validityPeriod = null;

    /** @var FHIRInteger */
    protected $numberOfRepeatsAllowed = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /** @var \FHIR\Elements\Complex\Quantity\FHIRDuration */
    protected $expectedSupplyDuration = null;

    /**
     * @return FHIRMedication
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * @param FHIRMedication $medication
     */
    public function setMedication(FHIRMedication $medication)
    {
        $this->medication = $medication;
    }

    /**
     * @return FHIRPeriod
     */
    public function getValidityPeriod()
    {
        return $this->validityPeriod;
    }

    /**
     * @param FHIRPeriod $validityPeriod
     */
    public function setValidityPeriod(FHIRPeriod $validityPeriod)
    {
        $this->validityPeriod = $validityPeriod;
    }

    /**
     * @return FHIRInteger
     */
    public function getNumberOfRepeatsAllowed()
    {
        return $this->numberOfRepeatsAllowed;
    }

    /**
     * @param FHIRInteger $numberOfRepeatsAllowed
     */
    public function setNumberOfRepeatsAllowed(FHIRInteger $numberOfRepeatsAllowed)
    {
        $this->numberOfRepeatsAllowed = $numberOfRepeatsAllowed;
    }

    /**
     * @return FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRQuantity $quantity
     */
    public function setQuantity(FHIRQuantity $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return \FHIR\Elements\Complex\Quantity\FHIRDuration
     */
    public function getExpectedSupplyDuration()
    {
        return $this->expectedSupplyDuration;
    }

    /**
     * @param \FHIR\Elements\Complex\Quantity\FHIRDuration $expectedSupplyDuration
     */
    public function setExpectedSupplyDuration(FHIRDuration $expectedSupplyDuration)
    {
        $this->expectedSupplyDuration = $expectedSupplyDuration;
    }
}