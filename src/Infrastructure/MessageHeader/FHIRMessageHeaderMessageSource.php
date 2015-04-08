<?php namespace FHIR\Resources\Infrastructure\MessageHeader;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRMessageHeaderMessageSource
 * @package FHIR\Resources\Infrastructure\MessageHeader
 */
class FHIRMessageHeaderMessageSource extends  AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;
    
    /** @var FHIRString */
    protected $software = null;
    
    /** @var FHIRString */
    protected $version = null;
    
    /** @var FHIRContact */
    protected $contact = null;
    
    /** @var FHIRUri */
    protected $endpoint = null;

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
     * @return FHIRString
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * @param FHIRString $software
     */
    public function setSoftware(FHIRString $software)
    {
        $this->software = $software;
    }

    /**
     * @return FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param FHIRString $version
     */
    public function setVersion(FHIRString $version)
    {
        $this->version = $version;
    }

    /**
     * @return FHIRContact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param FHIRContact $contact
     */
    public function setContact(FHIRContact $contact)
    {
        $this->contact = $contact;
    }

    /**
     * @return FHIRUri
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    /**
     * @param FHIRUri $endpoint
     */
    public function setEndpoint(FHIRUri $endpoint)
    {
        $this->endpoint = $endpoint;
    }
}