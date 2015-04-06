<?php namespace FHIR\Resources\Clinical\DeviceObservationReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRChannel
 * @package FHIR\Resources\Clinical\DeviceObservationReport
 */
class FHIRChannel extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRMetric[]|ResourceComponentCollection */
    protected $metric;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->metric = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return ResourceComponentCollection|FHIRMetric[]
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param FHIRMetric $metric
     */
    public function addMetric(FHIRMetric $metric)
    {
        $this->metric->append($metric);
    }
}