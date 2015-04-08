<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRValueSetDefineConcept
 * @package FHIR\Resources\Infrastructure\ValueSet\Define
 */
class FHIRValueSetDefineConcept extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRBoolean */
    protected $abstract = null;

    /** @var FHIRString */
    protected $display = null;

    /** @var FHIRString */
    protected $definition = null;

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
     * @return FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function setCode(FHIRCode $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRBoolean
     */
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param FHIRBoolean $abstract
     */
    public function setAbstract(FHIRBoolean $abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * @return FHIRString
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * @param FHIRString $display
     */
    public function setDisplay(FHIRString $display)
    {
        $this->display = $display;
    }

    /**
     * @return FHIRString
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param FHIRString $definition
     */
    public function setDefinition(FHIRString $definition)
    {
        $this->definition = $definition;
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