<?php namespace FHIR\Resources\Infrastructure\Composition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRCompositionEvent
 * @package FHIR\Resources\Infrastructure\Composition
 */
class FHIRCompositionEvent extends  AbstractFHIRObject
{
    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $code;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $detail;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->code = new ElementCollection();
        $this->detail = new ResourceCollection();
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function addCode(FHIRCodeableConcept $code)
    {
        $this->code->append($code);
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param FHIRResourceInterface $detail
     */
    public function addDetail(FHIRResourceInterface $detail)
    {
        $this->detail->append($detail);
    }
}