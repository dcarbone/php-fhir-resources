<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRValueSetComposeConceptSet
 * @package FHIR\Resources\Infrastructure\ValueSet
 */
class FHIRValueSetComposeConceptSet extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRString */
    protected $version = null;

    /** @var FHIRCode[]|ElementCollection */
    protected $code;

    /** @var FHIRValueSetComposeConceptSetFilter[]|ResourceComponentCollection */
    protected $filter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->code = new ElementCollection();
        $this->filter = new ResourceComponentCollection();
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
     * @return ElementCollection|FHIRCode[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function addCode(FHIRCode $code)
    {
        $this->code->append($code);
    }

    /**
     * @return ResourceComponentCollection|FHIRValueSetComposeConceptSetFilter[]
     */
    public function getFilter()
    {
        return $this->filter;
    }

    /**
     * @param FHIRValueSetComposeConceptSetFilter $filter
     */
    public function setFilter(FHIRValueSetComposeConceptSetFilter $filter)
    {
        $this->filter->append($filter);
    }
}