<?php namespace FHIR\Resources\Clinical\DeviceObservationReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRVirtualDevice
 * @package FHIR\Resources\Clinical\DeviceObservationReport
 */
class FHIRVirtualDevice extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRChannel[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRChannel[]
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * @param FHIRChannel $channel
     */
    public function addChannel(FHIRChannel $channel)
    {
        $this->channel->append($channel);
    }
}