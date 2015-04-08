<?php namespace FHIR\Resources\Infrastructure\MessageHeader;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIRId;
use FHIR\Resources\Infrastructure\FHIROperationOutcome;

/**
 * Class FHIRMessageHeaderResponse
 * @package FHIR\Resources\Infrastructure\MessageHeader
 */
class FHIRMessageHeaderResponse extends AbstractFHIRObject
{
    /** @var FHIRId */
    protected $identifier = null;

    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIROperationOutcome */
    protected $details = null;

    /**
     * @return FHIRId
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRId $identifier
     */
    public function setIdentifier(FHIRId $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function setCode(FHIRCode $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIROperationOutcome
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param FHIROperationOutcome $details
     */
    public function setDetails(FHIROperationOutcome $details)
    {
        $this->details = $details;
    }
}