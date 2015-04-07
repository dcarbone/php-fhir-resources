<?php namespace FHIR\Resources\Infrastructure\DocumentReference;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Infrastructure\FHIRDocumentReference;

/**
 * Class FHIRDocumentReferenceRelatesTo
 * @package FHIR\Resources\Infrastructure\DocumentReference
 */
class FHIRDocumentReferenceRelatesTo extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRDocumentReference */
    protected $target = null;

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
     * @return FHIRDocumentReference
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRDocumentReference $target
     */
    public function setTarget(FHIRDocumentReference $target)
    {
        $this->target = $target;
    }
}