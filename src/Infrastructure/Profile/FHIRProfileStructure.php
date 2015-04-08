<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRProfileStructure
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileStructure extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRBoolean */
    protected $publish = null;

    /** @var FHIRString */
    protected $purpose = null;

    /** @var FHIRProfileSearchParam[]|ResourceComponentCollection */
    protected $searchParam;

    /** @var FHIRProfileElement[]|ResourceComponentCollection */
    protected $element;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->searchParam = new ResourceComponentCollection();
        $this->element = new ResourceComponentCollection();
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
     * @return FHIRBoolean
     */
    public function getPublish()
    {
        return $this->publish;
    }

    /**
     * @param FHIRBoolean $publish
     */
    public function setPublish(FHIRBoolean $publish)
    {
        $this->publish = $publish;
    }

    /**
     * @return FHIRString
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param FHIRString $purpose
     */
    public function setPurpose(FHIRString $purpose)
    {
        $this->purpose = $purpose;
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileSearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * @param FHIRProfileSearchParam $searchParam
     */
    public function addSearchParam(FHIRProfileSearchParam $searchParam)
    {
        $this->searchParam->append($searchParam);
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileElement[]
     */
    public function getElement()
    {
        return $this->element;
    }

    /**
     * @param FHIRProfileElement $element
     */
    public function addElement(FHIRProfileElement $element)
    {
        $this->element->append($element);
    }
}