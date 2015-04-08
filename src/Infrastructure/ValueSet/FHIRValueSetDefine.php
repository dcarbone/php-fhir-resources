<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRValueSetDefine
 * @package FHIR\Resources\Infrastructure\ValueSet
 */
class FHIRValueSetDefine extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRString */
    protected $version = null;

    /** @var FHIRBoolean */
    protected $caseSensitive = null;

    /** @var FHIRValueSetDefineConcept[]|ResourceComponentCollection */
    protected $concept;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->concept = new ResourceComponentCollection();
    }

    /**
     * @return FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param FHIRUri $system
     */
    public function setSystem(FHIRUri $system)
    {
        $this->system = $system;
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
     * @return FHIRBoolean
     */
    public function getCaseSensitive()
    {
        return $this->caseSensitive;
    }

    /**
     * @param FHIRBoolean $caseSensitive
     */
    public function setCaseSensitive(FHIRBoolean $caseSensitive)
    {
        $this->caseSensitive = $caseSensitive;
    }

    /**
     * @return ResourceComponentCollection|FHIRValueSetDefineConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * @param FHIRValueSetDefineConcept $concept
     */
    public function addConcept(FHIRValueSetDefineConcept $concept)
    {
        $this->concept->append($concept);
    }
}