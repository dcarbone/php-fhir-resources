<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRProfileElement
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileElement extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $path = null;

    /** @var FHIRCode[]|ElementCollection */
    protected $representation;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRProfileSlicing */
    protected $slicing = null;

    /** @var FHIRProfileElementDefinition */
    protected $definition = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->representation = new ElementCollection();
    }

    /**
     * @return FHIRString
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @param FHIRString $path
     */
    public function setPath(FHIRString $path)
    {
        $this->path = $path;
    }

    /**
     * @return ElementCollection|FHIRCode[]
     */
    public function getRepresentation()
    {
        return $this->representation;
    }

    /**
     * @param FHIRCode $representation
     */
    public function addRepresentation(FHIRCode $representation)
    {
        $this->representation->append($representation);
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
     * @return FHIRProfileSlicing
     */
    public function getSlicing()
    {
        return $this->slicing;
    }

    /**
     * @param FHIRProfileSlicing $slicing
     */
    public function setSlicing(FHIRProfileSlicing $slicing)
    {
        $this->slicing = $slicing;
    }

    /**
     * @return FHIRProfileElementDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param FHIRProfileElementDefinition $definition
     */
    public function setDefinition(FHIRProfileElementDefinition $definition)
    {
        $this->definition = $definition;
    }
}