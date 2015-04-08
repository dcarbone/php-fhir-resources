<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConformanceSearchParam
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceSearchParam extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRUri */
    protected $definition = null;

    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRCode[]|ElementCollection */
    protected $target;

    /** @var FHIRString[]|ElementCollection */
    protected $chain;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->target = new ElementCollection();
        $this->chain = new ElementCollection();
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
     * @return ElementCollection|FHIRCode[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRCode $target
     */
    public function addTarget(FHIRCode $target)
    {
        $this->target->append($target);
    }

    /**
     * @return ElementCollection|FHIRString[]
     */
    public function getChain()
    {
        return $this->chain;
    }

    /**
     * @param FHIRString $chain
     */
    public function addChain(FHIRString $chain)
    {
        $this->chain->append($chain);
    }
}