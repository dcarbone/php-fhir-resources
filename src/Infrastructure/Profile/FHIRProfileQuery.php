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

    /** @var FHIRProfileQuerySearchParam[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRProfileQuerySearchParam[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param FHIRProfileQuerySearchParam $parameter
     */
    public function addParameter(FHIRProfileQuerySearchParam $parameter)
    {
        $this->parameter->append($parameter);
    }
}