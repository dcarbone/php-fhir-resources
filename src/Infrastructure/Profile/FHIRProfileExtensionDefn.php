<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRProfileExtensionDefn
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileExtensionDefn extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRString */
    protected $display = null;

    /** @var FHIRCode */
    protected $contextType = null;

    /** @var FHIRString[]|ElementCollection */
    protected $context;

    /** @var FHIRProfileStructureElementElementDefinition */
    protected $definition = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->context = new ElementCollection();
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
     * @return FHIRCode
     */
    public function getContextType()
    {
        return $this->contextType;
    }

    /**
     * @param FHIRCode $contextType
     */
    public function setContextType(FHIRCode $contextType)
    {
        $this->contextType = $contextType;
    }

    /**
     * @return ElementCollection|FHIRString[]
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param FHIRString $context
     */
    public function addContext(FHIRString $context)
    {
        $this->context->append($context);
    }

    /**
     * @return FHIRProfileStructureElementElementDefinition
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param FHIRProfileStructureElementElementDefinition $definition
     */
    public function setDefinition(FHIRProfileStructureElementElementDefinition $definition)
    {
        $this->definition = $definition;
    }
}