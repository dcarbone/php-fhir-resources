<?php namespace FHIR\Resources\Clinical\MedicationDispense;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\FHIRRatio;
use FHIR\Elements\Complex\FHIRSchedule;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;

/**
 * Class FHIRMedicationDosage
 * @package FHIR\Resources\Clinical\MedicationDispense
 */
class FHIRMedicationDispenseDispenseDosage extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $additionalInstructions = null;

    /** @var FHIRDateTime|FHIRPeriod|FHIRSchedule */
    protected $timing = null;

    /** @var FHIRBoolean|FHIRCodeableConcept */
    protected $asNeeded = null;

    /** @var FHIRCodeableConcept */
    protected $site = null;

    /** @var FHIRCodeableConcept */
    protected $route = null;

    /** @var FHIRCodeableConcept */
    protected $method = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /** @var FHIRRatio */
    protected $rate = null;

    /** @var FHIRRatio */
    protected $maxDosePeriod = null;

    /**
     * @return FHIRCodeableConcept
     */
    public function getAdditionalInstructions()
    {
        return $this->additionalInstructions;
    }

    /**
     * @param FHIRCodeableConcept $additionalInstructions
     */
    public function setAdditionalInstructions(FHIRCodeableConcept $additionalInstructions)
    {
        $this->additionalInstructions = $additionalInstructions;
    }

    /**
     * @return FHIRDateTime|FHIRPeriod|FHIRSchedule
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param FHIRDateTime|FHIRPeriod|FHIRSchedule $timing
     */
    public function setTiming($timing)
    {
        if ($timing instanceof FHIRDateTime ||
            $timing instanceof FHIRPeriod ||
            $timing instanceof FHIRSchedule)
        {
            $this->timing = $timing;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'timing',
                'FHIRDateTime, FHIRPeriod, or FHIRSchedule',
                $timing);
        }
    }

    /**
     * @return FHIRBoolean|FHIRCodeableConcept
     */
    public function getAsNeeded()
    {
        return $this->asNeeded;
    }

    /**
     * @param FHIRBoolean|FHIRCodeableConcept $asNeeded
     */
    public function setAsNeeded($asNeeded)
    {
        if ($asNeeded instanceof FHIRBoolean || $asNeeded instanceof FHIRCodeableConcept)
            $this->asNeeded = $asNeeded;
        else
            throw $this->createInvalidPropertyValueTypeException('asNeeded', 'FHIRBoolean or FHIRCodeableConcept', $asNeeded);
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param FHIRCodeableConcept $site
     */
    public function setSite(FHIRCodeableConcept $site)
    {
        $this->site = $site;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param FHIRCodeableConcept $route
     */
    public function setRoute(FHIRCodeableConcept $route)
    {
        $this->route = $route;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param FHIRCodeableConcept $method
     */
    public function setMethod(FHIRCodeableConcept $method)
    {
        $this->method = $method;
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
     * @return FHIRRatio
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * @param FHIRRatio $rate
     */
    public function setRate(FHIRRatio $rate)
    {
        $this->rate = $rate;
    }

    /**
     * @return FHIRRatio
     */
    public function getMaxDosePeriod()
    {
        return $this->maxDosePeriod;
    }

    /**
     * @param FHIRRatio $maxDosePeriod
     */
    public function setMaxDosePeriod(FHIRRatio $maxDosePeriod)
    {
        $this->maxDosePeriod = $maxDosePeriod;
    }
}