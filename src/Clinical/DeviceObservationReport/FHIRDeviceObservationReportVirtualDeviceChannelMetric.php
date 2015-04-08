<?php namespace FHIR\Resources\Clinical\DeviceObservationReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Resources\Clinical\FHIRObservation;

/**
 * Class FHIRDeviceObservationReportVirtualDeviceChannelMetric
 * @package FHIR\Resources\Clinical\DeviceObservationReport
 */
class FHIRDeviceObservationReportVirtualDeviceChannelMetric extends AbstractFHIRObject
{
    /** @var FHIRObservation */
    protected $observation = null;

    /**
     * @return FHIRObservation
     */
    public function getObservation()
    {
        return $this->observation;
    }

    /**
     * @param FHIRObservation $observation
     */
    public function setObservation(FHIRObservation $observation)
    {
        $this->observation = $observation;
    }
}