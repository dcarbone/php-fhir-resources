<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIRId;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\Profile\FHIRProfileExtensionDefn;
use FHIR\Resources\Infrastructure\Profile\FHIRProfileMapping;
use FHIR\Resources\Infrastructure\Profile\FHIRProfileQuery;
use FHIR\Resources\Infrastructure\Profile\FHIRProfileStructure;

/**
 * Class FHIRProfile
 * @package FHIR\Resources\Infrastructure
 */
class FHIRProfile extends FHIRResource
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

    /** @var FHIRCoding[]|ElementCollection */
    protected $code;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRBoolean */
    protected $experimental = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRString */
    protected $requirements = null;

    /** @var FHIRId */
    protected $fhirVersion = null;

    /** @var FHIRProfileExtensionDefn[]|ResourceComponentCollection */
    protected $extensionDefn;

    /** @var FHIRProfileMapping[]|ResourceComponentCollection */
    protected $mapping;

    /** @var FHIRProfileQuery[]|ResourceComponentCollection */
    protected $query;

    /** @var FHIRProfileStructure[]|ResourceComponentCollection */
    protected $structure;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
        $this->extensionDefn = new ResourceComponentCollection();
        $this->mapping = new ResourceComponentCollection();
        $this->query = new ResourceComponentCollection();
        $this->structure = new ResourceComponentCollection();
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
     * @return ElementCollection|FHIRCoding[]
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCoding $code
     */
    public function addCode(FHIRCoding $code)
    {
        $this->code->append($code);
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
     * @return FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @param FHIRString $requirements
     */
    public function setRequirements(FHIRString $requirements)
    {
        $this->requirements = $requirements;
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
     * @return ResourceComponentCollection|FHIRProfileExtensionDefn[]
     */
    public function getExtensionDefn()
    {
        return $this->extensionDefn;
    }

    /**
     * @param FHIRProfileExtensionDefn $extensionDefn
     */
    public function addExtensionDefn(FHIRProfileExtensionDefn $extensionDefn)
    {
        $this->extensionDefn->append($extensionDefn);
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * @param FHIRProfileMapping $mapping
     */
    public function addMapping(FHIRProfileMapping $mapping)
    {
        $this->mapping->append($mapping);
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileQuery[]
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param FHIRProfileQuery $query
     */
    public function addQuery(FHIRProfileQuery $query)
    {
        $this->query->append($query);
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileStructure[]
     */
    public function getStructure()
    {
        return $this->structure;
    }

    /**
     * @param FHIRProfileStructure $structure
     */
    public function addStructure(FHIRProfileStructure $structure)
    {
        $this->structure->append($structure);
    }
}