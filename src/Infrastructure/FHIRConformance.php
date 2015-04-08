<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIRId;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\Conformance\FHIRConformanceDocument;
use FHIR\Resources\Infrastructure\Conformance\FHIRConformanceImplementation;
use FHIR\Resources\Infrastructure\Conformance\FHIRConformanceMessaging;
use FHIR\Resources\Infrastructure\Conformance\FHIRConformanceRest;
use FHIR\Resources\Infrastructure\Conformance\FHIRConformanceSoftware;

/**
 * Class FHIRConformance
 * @package FHIR\Resources\Infrastructure
 */
class FHIRConformance extends FHIRResource
{
    /** @var FHIRString */
    protected $identifier = null;

    /** @var FHIRString */
    protected $version = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $publisher = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRBoolean */
    protected $experimental = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRId */
    protected $fhirVersion = null;

    /** @var FHIRBoolean */
    protected $acceptUnknown = null;

    /** @var FHIRCode[]|ElementCollection */
    protected $format;

    /** @var FHIRProfile[]|ResourceCollection */
    protected $profile;

    /** @var FHIRConformanceMessaging[]|ResourceComponentCollection */
    protected $messaging;

    /** @var FHIRConformanceRest[]|ResourceComponentCollection */
    protected $rest;

    /** @var FHIRConformanceSoftware */
    protected $software = null;

    /** @var FHIRConformanceImplementation */
    protected $implementation = null;

    /** @var FHIRConformanceDocument[]|ResourceComponentCollection */
    protected $document;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
        $this->format = new ElementCollection();
        $this->profile = new ResourceCollection();
        $this->messaging = new ResourceComponentCollection();
        $this->rest = new ResourceComponentCollection();
        $this->document = new ResourceComponentCollection();
    }

    /**
     * @return FHIRString
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRString $identifier
     */
    public function setIdentifier(FHIRString $identifier)
    {
        $this->identifier = $identifier;
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
    public function getPublisher()
    {
        return $this->publisher;
    }

    /**
     * @param FHIRString $publisher
     */
    public function setPublisher(FHIRString $publisher)
    {
        $this->publisher = $publisher;
    }

    /**
     * @return ElementCollection|FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * @param FHIRContact $telecom
     */
    public function addTelecom(FHIRContact $telecom)
    {
        $this->telecom->append($telecom);
    }

    /**
     * @return FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRString $description
     */
    public function setDescription(FHIRString $description)
    {
        $this->description = $description;
    }

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $status
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
    }

    /**
     * @return FHIRBoolean
     */
    public function getExperimental()
    {
        return $this->experimental;
    }

    /**
     * @param FHIRBoolean $experimental
     */
    public function setExperimental(FHIRBoolean $experimental)
    {
        $this->experimental = $experimental;
    }

    /**
     * @return FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param FHIRDateTime $date
     */
    public function setDate(FHIRDateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return FHIRId
     */
    public function getFhirVersion()
    {
        return $this->fhirVersion;
    }

    /**
     * @param FHIRId $fhirVersion
     */
    public function setFhirVersion(FHIRId $fhirVersion)
    {
        $this->fhirVersion = $fhirVersion;
    }

    /**
     * @return FHIRBoolean
     */
    public function getAcceptUnknown()
    {
        return $this->acceptUnknown;
    }

    /**
     * @param FHIRBoolean $acceptUnknown
     */
    public function setAcceptUnknown(FHIRBoolean $acceptUnknown)
    {
        $this->acceptUnknown = $acceptUnknown;
    }

    /**
     * @return ElementCollection|FHIRCode[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param FHIRCode $format
     */
    public function addFormat(FHIRCode $format)
    {
        $this->format->append($format);
    }

    /**
     * @return ResourceCollection|FHIRProfile[]
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param FHIRProfile $profile
     */
    public function addProfile(FHIRProfile $profile)
    {
        $this->profile->append($profile);
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceMessaging[]
     */
    public function getMessaging()
    {
        return $this->messaging;
    }

    /**
     * @param FHIRConformanceMessaging $messaging
     */
    public function addMessaging(FHIRConformanceMessaging $messaging)
    {
        $this->messaging->append($messaging);
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceRest[]
     */
    public function getRest()
    {
        return $this->rest;
    }

    /**
     * @param FHIRConformanceRest $rest
     */
    public function addRest(FHIRConformanceRest $rest)
    {
        $this->rest->append($rest);
    }

    /**
     * @return FHIRConformanceSoftware
     */
    public function getSoftware()
    {
        return $this->software;
    }

    /**
     * @param FHIRConformanceSoftware $software
     */
    public function setSoftware(FHIRConformanceSoftware $software)
    {
        $this->software = $software;
    }

    /**
     * @return FHIRConformanceImplementation
     */
    public function getImplementation()
    {
        return $this->implementation;
    }

    /**
     * @param FHIRConformanceImplementation $implementation
     */
    public function setImplementation(FHIRConformanceImplementation $implementation)
    {
        $this->implementation = $implementation;
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceDocument[]
     */
    public function getDocument()
    {
        return $this->document;
    }

    /**
     * @param FHIRConformanceDocument $document
     */
    public function addDocument(FHIRConformanceDocument $document)
    {
        $this->document->append($document);
    }
}