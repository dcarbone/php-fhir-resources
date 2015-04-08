<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRConformanceSoftware
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceSoftware extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $version = null;

    /** @var FHIRDateTime */
    protected $releaseDate = null;

    /**
     * @return FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRString $name
     */
    public function setName(FHIRString $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param FHIRString $version
     */
    public function setVersion(FHIRString $version)
    {
        $this->version = $version;
    }

    /**
     * @return FHIRDateTime
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @param FHIRDateTime $releaseDate
     */
    public function setReleaseDate(FHIRDateTime $releaseDate)
    {
        $this->releaseDate = $releaseDate;
    }
}