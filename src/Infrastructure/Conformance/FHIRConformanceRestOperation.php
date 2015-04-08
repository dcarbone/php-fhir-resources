<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConformanceRestOperation
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceRestOperation extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRString */
    protected $documentation = null;

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
     * @return FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param FHIRString $documentation
     */
    public function setDocumentation(FHIRString $documentation)
    {
        $this->documentation = $documentation;
    }
}