<?php namespace FHIR\Resources\Clinical\DiagnosticOrder;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRDevice;

/**
 * Class FHIREvent
 * @package FHIR\Resources\Clinical\DiagnosticOrder
 */
class FHIREvent extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCodeableConcept */
    protected $description = null;

    /** @var FHIRDateTime */
    protected $dateTime = null;

    /** @var FHIRPractitioner|FHIRDevice */
    protected $actor = null;

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $status
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRCodeableConcept $description
     */
    public function setDescription(FHIRCodeableConcept $description)
    {
        $this->description = $description;
    }

    /**
     * @return FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param FHIRDateTime $dateTime
     */
    public function setDateTime(FHIRDateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return FHIRDevice|FHIRPractitioner
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * @param FHIRDevice|FHIRPractitioner $actor
     */
    public function setActor($actor)
    {
        if ($actor instanceof FHIRDevice || $actor instanceof FHIRPractitioner)
            $this->actor = $actor;
        else
            throw $this->createInvalidPropertyValueTypeException('actor', 'FHIRDevice or FHIRPractitioner', $actor);
    }
}