<?php namespace FHIR\Resources\Infrastructure\SecurityEvent;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRSecurityEventSource
 * @package FHIR\Resources\Infrastructure\SecurityEvent
 */
class FHIRSecurityEventSource extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $site = null;

    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRCoding[]|ElementCollection */
    protected $type;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new ElementCollection();
    }

    /**
     * @return FHIRString
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param FHIRString $site
     */
    public function setSite(FHIRString $site)
    {
        $this->site = $site;
    }

    /**
     * @return FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function setIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return ElementCollection|FHIRCoding[]
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCoding $type
     */
    public function addType(FHIRCoding $type)
    {
        $this->type->append($type);
    }
}