<?php namespace FHIR\Resources\Infrastructure\Provenance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRProvenanceEntity
 * @package FHIR\Resources\Infrastructure\Provenance
 */
class FHIRProvenanceEntity extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $role = null;

    /** @var FHIRCoding */
    protected $type = null;
    
    /** @var FHIRUri */
    protected $reference = null;
    
    /** @var FHIRString */
    protected $display = null;
    
    /** @var FHIRProvenanceAgent */
    protected $agent = null;

    /**
     * @return FHIRCode
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param FHIRCode $role
     */
    public function setRole(FHIRCode $role)
    {
        $this->role = $role;
    }

    /**
     * @return FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCoding $type
     */
    public function setType(FHIRCoding $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRUri
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param FHIRUri $reference
     */
    public function setReference(FHIRUri $reference)
    {
        $this->reference = $reference;
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
     * @return FHIRProvenanceAgent
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @param FHIRProvenanceAgent $agent
     */
    public function setAgent(FHIRProvenanceAgent $agent)
    {
        $this->agent = $agent;
    }
}