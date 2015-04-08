<?php namespace FHIR\Resources\Clinical\DeviceObservationReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRDeviceObservationReportVirtualDevice
 * @package FHIR\Resources\Clinical\DeviceObservationReport
 */
class FHIRDeviceObservationReportVirtualDevice extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRDeviceObservationReportVirtualDeviceChannel[]|ResourceComponentCollection */
    protected $channel;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->channel = new ResourceComponentCollection();
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
     * @return ResourceComponentCollection|FHIRDeviceObservationReportVirtualDeviceChannel[]
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param FHIRDeviceObservationReportVirtualDeviceChannel $channel
     */
    public function addChannel(FHIRDeviceObservationReportVirtualDeviceChannel $channel)
    {
        $this->channel->append($channel);
    }
}