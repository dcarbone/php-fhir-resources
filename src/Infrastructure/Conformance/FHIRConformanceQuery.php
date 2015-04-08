<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRConformanceQuery
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceQuery extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRUri */
    protected $definition = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRConformanceSearchParam[]|ResourceComponentCollection */
    protected $parameter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parameter = new ResourceComponentCollection();
    }

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
     * @return FHIRUri
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param FHIRUri $definition
     */
    public function setDefinition(FHIRUri $definition)
    {
        $this->definition = $definition;
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

    /**
     * @return ResourceComponentCollection|FHIRConformanceSearchParam[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param FHIRConformanceSearchParam $parameter
     */
    public function addParameter(FHIRConformanceSearchParam $parameter)
    {
        $this->parameter->append($parameter);
    }
}