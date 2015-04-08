<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIRId;

/**
 * Class FHIRProfileStructureElementElementDefinitionConstraint
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileStructureElementElementDefinitionConstraint extends AbstractFHIRObject
{
    /** @var FHIRId */
    protected $key = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRCode */
    protected $severity = null;

    /** @var FHIRString */
    protected $human = null;

    /** @var FHIRString */
    protected $xpath = null;

    /**
     * @return FHIRId
     */
    public function getKey()
    {
        return $this->key;
    }

    /**
     * @param FHIRId $key
     */
    public function setKey(FHIRId $key)
    {
        $this->key = $key;
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
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @param FHIRCode $severity
     */
    public function setSeverity(FHIRCode $severity)
    {
        $this->severity = $severity;
    }

    /**
     * @return FHIRString
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * @param FHIRString $human
     */
    public function setHuman(FHIRString $human)
    {
        $this->human = $human;
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
}