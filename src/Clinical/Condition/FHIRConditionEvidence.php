<?php namespace FHIR\Resources\Clinical\Condition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRConditionEvidence
 * @package FHIR\Resources\Clinical\Condition
 */
class FHIRConditionEvidence extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $detail;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detail = new ResourceCollection();
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