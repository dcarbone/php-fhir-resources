<?php namespace FHIR\Resources\Clinical\Observation;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\FHIRRange;

/**
 * Class FHIRObservationReferenceRange
 * @package FHIR\Resources\Clinical\Observation
 */
class FHIRObservationReferenceRange extends AbstractFHIRObject
{
    /** @var FHIRQuantity */
    protected $low = null;

    /** @var FHIRQuantity */
    protected $high = null;

    /** @var FHIRCodeableConcept */
    protected $meaning = null;

    /** @var FHIRRange */
    protected $age = null;

    /**
     * @return FHIRQuantity
     */
    public function getLow()
    {
        return $this->low;
    }

    /**
     * @param FHIRQuantity $low
     */
    public function setLow(FHIRQuantity $low)
    {
        $this->low = $low;
    }

    /**
     * @return FHIRQuantity
     */
    public function getHigh()
    {
        return $this->high;
    }

    /**
     * @param FHIRQuantity $high
     */
    public function setHigh(FHIRQuantity $high)
    {
        $this->high = $high;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getMeaning()
    {
        return $this->meaning;
    }

    /**
     * @param FHIRCodeableConcept $meaning
     */
    public function setMeaning(FHIRCodeableConcept $meaning)
    {
        $this->meaning = $meaning;
    }

    /**
     * @return FHIRRange
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param FHIRRange $age
     */
    public function setAge(FHIRRange $age)
    {
        $this->age = $age;
    }
}