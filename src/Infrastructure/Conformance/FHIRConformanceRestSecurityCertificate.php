<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRBase64Binary;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConformanceRestSecurityCertificate
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceRestSecurityCertificate extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRBase64Binary */
    protected $blob = null;

    /**
     * @return FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCode $type
     */
    public function setType(FHIRCode $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRBase64Binary
     */
    public function getBlob()
    {
        return $this->blob;
    }

    /**
     * @param FHIRBase64Binary $blob
     */
    public function setBlob(FHIRBase64Binary $blob)
    {
        $this->blob = $blob;
    }
}