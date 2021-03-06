<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\ValueSet\FHIRValueSetCompose;
use FHIR\Resources\Infrastructure\ValueSet\FHIRValueSetDefine;
use FHIR\Resources\Infrastructure\ValueSet\FHIRValueSetExpansion;

/**
 * Class FHIRValueSet
 * @package FHIR\Resources\Infrastructure
 */
class FHIRValueSet extends FHIRResource
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

    /** @var FHIRString */
    protected $copyright = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRBoolean */
    protected $experimental = null;

    /** @var FHIRBoolean */
    protected $extensible = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRValueSetDefine */
    protected $define = null;

    /** @var FHIRValueSetExpansion */
    protected $expansion = null;

    /** @var FHIRValueSetCompose */
    protected $compose = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
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
     * @return FHIRString
     */
    public function getCopyright()
    {
        return $this->copyright;
    }

    /**
     * @param FHIRString $copyright
     */
    public function setCopyright(FHIRString $copyright)
    {
        $this->copyright = $copyright;
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
     * @return FHIRBoolean
     */
    public function getExtensible()
    {
        return $this->extensible;
    }

    /**
     * @param FHIRBoolean $extensible
     */
    public function setExtensible(FHIRBoolean $extensible)
    {
        $this->extensible = $extensible;
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
     * @return FHIRValueSetDefine
     */
    public function getDefine()
    {
        return $this->define;
    }

    /**
     * @param FHIRValueSetDefine $define
     */
    public function setDefine(FHIRValueSetDefine $define)
    {
        $this->define = $define;
    }

    /**
     * @return FHIRValueSetExpansion
     */
    public function getExpansion()
    {
        return $this->expansion;
    }

    /**
     * @param FHIRValueSetExpansion $expansion
     */
    public function setExpansion(FHIRValueSetExpansion $expansion)
    {
        $this->expansion = $expansion;
    }

    /**
     * @return FHIRValueSetCompose
     */
    public function getCompose()
    {
        return $this->compose;
    }

    /**
     * @param FHIRValueSetCompose $compose
     */
    public function setCompose(FHIRValueSetCompose $compose)
    {
        $this->compose = $compose;
    }
}