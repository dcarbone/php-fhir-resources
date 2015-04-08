<?php namespace FHIR\Resources\Clinical\DeviceObservationReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRDeviceObservationReportVirtualDeviceChannel
 * @package FHIR\Resources\Clinical\DeviceObservationReport
 */
class FHIRDeviceObservationReportVirtualDeviceChannel extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRDeviceObservationReportVirtualDeviceChannelMetric[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRDeviceObservationReportVirtualDeviceChannelMetric[]
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param FHIRDeviceObservationReportVirtualDeviceChannelMetric $metric
     */
    public function addMetric(FHIRDeviceObservationReportVirtualDeviceChannelMetric $metric)
    {
        $this->metric->append($metric);
    }
}