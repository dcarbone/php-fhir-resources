<?php namespace FHIR\Resources\Administrative\Order;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRSchedule;

/**
 * Class FHIROrderWhen
 * @package FHIR\Resources\Administrative\Order
 */
class FHIROrderWhen extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRSchedule */
    protected $schedule = null;

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
     * @return FHIRSchedule
     */
    public function getSchedule()
    {
        return $this->schedule;
    }

    /**
     * @param FHIRSchedule $schedule
     */
    public function setSchedule(FHIRSchedule $schedule)
    {
        $this->schedule = $schedule;
    }
}