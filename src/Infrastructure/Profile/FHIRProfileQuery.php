<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRProfileQuery
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileQuery extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRProfileSearchParam[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRProfileSearchParam[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param FHIRProfileSearchParam $parameter
     */
    public function addParameter(FHIRProfileSearchParam $parameter)
    {
        $this->parameter->append($parameter);
    }
}