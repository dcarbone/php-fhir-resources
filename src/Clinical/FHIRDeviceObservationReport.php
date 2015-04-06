<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Clinical\DeviceObservationReport\FHIRVirtualDevice;

/**
 * Class FHIRDeviceObservationReport
 * @package FHIR\Resources\Clinical
 */
class FHIRDeviceObservationReport extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRInstant */
    protected $instant = null;

    /** @var FHIRDevice */
    protected $source = null;

    /** @var FHIRPatient|FHIRDevice|FHIRLocation */
    protected $subject = null;

    /** @var FHIRVirtualDevice[]|ResourceComponentCollection */
    protected $virtualDevice;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->virtualDevice = new ResourceComponentCollection();
    }

    /**
     * @return FHIRInstant
     */
    public function getInstant()
    {
        return $this->instant;
    }

    /**
     * @param FHIRInstant $instant
     */
    public function setInstant(FHIRInstant $instant)
    {
        $this->instant = $instant;
    }

    /**
     * @return FHIRDevice
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRDevice $source
     */
    public function setSource(FHIRDevice $source)
    {
        $this->source = $source;
    }

    /**
     * @return FHIRDevice|FHIRLocation|FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRLocation|FHIRPatient $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRLocation ||
            $subject instanceof FHIRPatient)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRLocation, or FHIRPatient',
                $subject);
        }
    }

    /**
     * @return ResourceComponentCollection|FHIRVirtualDevice[]
     */
    public function getVirtualDevice()
    {
        return $this->virtualDevice;
    }

    /**
     * @param FHIRVirtualDevice $virtualDevice
     */
    public function addVirtualDevice(FHIRVirtualDevice $virtualDevice)
    {
        $this->virtualDevice->append($virtualDevice);
    }
}