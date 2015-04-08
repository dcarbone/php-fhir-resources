<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRConformanceImplementation
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceImplementation extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRUri */
    protected $url = null;

    /**
     * @return FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRString $description
     */
    public function setDescription(FHIRString $description)
    {
        $this->description = $description;
    }

    /**
     * @return FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param FHIRUri $url
     */
    public function setUrl(FHIRUri $url)
    {
        $this->url = $url;
    }
}