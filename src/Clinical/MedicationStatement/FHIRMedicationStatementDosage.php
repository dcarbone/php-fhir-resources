<?php namespace FHIR\Resources\Clinical\MedicationStatement;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\FHIRRatio;
use FHIR\Elements\Complex\FHIRSchedule;
use FHIR\Elements\Primitive\FHIRBoolean;

/**
 * Class FHIRMedicationDosage
 * @package FHIR\Resources\Clinical\MedicationStatement
 */
class FHIRMedicationStatementDosage extends AbstractFHIRObject
{
    /** @var FHIRSchedule */
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
    protected $maxDosePerPeriod = null;

    /**
     * @return FHIRSchedule
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param FHIRSchedule $timing
     */
    public function setTiming(FHIRSchedule $timing)
    {
        $this->timing = $timing;
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
    public function getMaxDosePerPeriod()
    {
        return $this->maxDosePerPeriod;
    }

    /**
     * @param FHIRRatio $maxDosePerPeriod
     */
    public function setMaxDosePerPeriod(FHIRRatio $maxDosePerPeriod)
    {
        $this->maxDosePerPeriod = $maxDosePerPeriod;
    }
}