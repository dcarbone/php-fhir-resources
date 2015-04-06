<?php namespace FHIR\Resources;

use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRNarrative
 * @package FHIR\Resource
 */
class FHIRNarrative extends FHIRResource
{
    /** @var FHIRCode */
    protected $status;

    /** @var string */
    protected $div;

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $code
     */
    public function setStatus(FHIRCode $code)
    {
        $this->status = $code;
    }

    /**
     * @return string
     */
    public function getDiv()
    {
        return $this->div;
    }

    /**
     * @param string $div
     */
    public function setDiv($div)
    {
        $this->div = $div;
    }
}