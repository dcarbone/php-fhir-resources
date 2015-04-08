<?php namespace FHIR\Resources\Clinical\ImagingStudy;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIROid;

/**
 * Class FHIRImagingStudySeries
 * @package FHIR\Resources\Clinical\ImagingStudy
 */
class FHIRImagingStudySeries extends AbstractFHIRObject
{
    /** @var FHIRInteger */
    protected $number = null;

    /** @var FHIRCode */
    protected $modality = null;

    /** @var FHIROid */
    protected $uid = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRInteger */
    protected $numberOfInstances = null;

    /** @var FHIRCode */
    protected $availability = null;

    /** @var FHIRUri */
    protected $url = null;

    /** @var FHIRCoding */
    protected $bodySite = null;

    /** @var FHIRDateTime */
    protected $dateTime = null;

    /** @var FHIRImagingStudySeriesInstance[]|ResourceComponentCollection */
    protected $instance;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->instance = new ResourceComponentCollection();
    }

    /**
     * @return FHIRInteger
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param FHIRInteger $number
     */
    public function setNumber(FHIRInteger $number)
    {
        $this->number = $number;
    }

    /**
     * @return FHIRCode
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * @param FHIRCode $modality
     */
    public function setModality(FHIRCode $modality)
    {
        $this->modality = $modality;
    }

    /**
     * @return FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param FHIROid $uid
     */
    public function setUid(FHIROid $uid)
    {
        $this->uid = $uid;
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
     * @return FHIRInteger
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * @param FHIRInteger $numberOfInstances
     */
    public function setNumberOfInstances(FHIRInteger $numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
    }

    /**
     * @return FHIRCode
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param FHIRCode $availability
     */
    public function setAvailability(FHIRCode$availability)
    {
        $this->availability = $availability;
    }

    /**
     * @return FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param FHIRUri $url
     */
    public function setUrl(FHIRUri $url)
    {
        $this->url = $url;
    }

    /**
     * @return FHIRCoding
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * @param FHIRCoding $bodySite
     */
    public function setBodySite(FHIRCoding $bodySite)
    {
        $this->bodySite = $bodySite;
    }

    /**
     * @return FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param FHIRDateTime $dateTime
     */
    public function setDateTime(FHIRDateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return ResourceComponentCollection|FHIRImagingStudySeriesInstance[]
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * @param FHIRImagingStudySeriesInstance $instance
     */
    public function addInstance(FHIRImagingStudySeriesInstance $instance)
    {
        $this->instance->append($instance);
    }
}