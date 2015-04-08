<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRValueSetExpansionContains
 * @package FHIR\Resources\Infrastructure\ValueSet
 */
class FHIRValueSetExpansionContains extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRString */
    protected $display = null;

    /** @var FHIRValueSetExpansionContains[]|ResourceComponentCollection */
    protected $contains;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->contains = new ResourceComponentCollection();
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
     * @return ResourceComponentCollection|FHIRValueSetExpansionContains[]
     */
    public function getContains()
    {
        return $this->contains;
    }

    /**
     * @param FHIRValueSetExpansionContains $contains
     */
    public function addContains(FHIRValueSetExpansionContains $contains)
    {
        $this->contains->append($contains);
    }
}