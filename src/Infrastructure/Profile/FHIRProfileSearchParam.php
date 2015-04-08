<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRProfileSearchParam
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileSearchParam extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRString */
    protected $xpath = null;

    /** @var FHIRCode[]|ElementCollection */
    protected $target;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->target = new ElementCollection();
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
     * @return FHIRString
     */
    public function getXpath()
    {
        return $this->xpath;
    }

    /**
     * @param FHIRString $xpath
     */
    public function setXpath(FHIRString $xpath)
    {
        $this->xpath = $xpath;
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
}