<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRInstant;

/**
 * Class FHIRValueSetExpansion
 * @package FHIR\Resources\Infrastructure\ValueSet
 */
class FHIRValueSetExpansion extends AbstractFHIRObject
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRInstant */
    protected $timestamp = null;

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
     * @return FHIRInstant
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param FHIRInstant $timestamp
     */
    public function setTimestamp(FHIRInstant $timestamp)
    {
        $this->timestamp = $timestamp;
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