<?php namespace FHIR\Resources\Clinical\DeviceObservationReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRDeviceObservationReportChannel
 * @package FHIR\Resources\Clinical\DeviceObservationReport
 */
class FHIRDeviceObservationReportChannel extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRDeviceObservationReportMetric[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRDeviceObservationReportMetric[]
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param FHIRDeviceObservationReportMetric $metric
     */
    public function addMetric(FHIRDeviceObservationReportMetric $metric)
    {
        $this->metric->append($metric);
    }
}