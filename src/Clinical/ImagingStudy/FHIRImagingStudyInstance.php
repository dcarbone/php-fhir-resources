<?php namespace FHIR\Resources\Clinical\ImagingStudy;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIROid;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRImagingStudyInstance
 * @package FHIR\Resources\Clinical\ImagingStudy
 */
class FHIRImagingStudyInstance extends AbstractFHIRObject
{
    /** @var FHIRInteger */
    protected $number = null;

    /** @var FHIROid */
    protected $uid = null;

    /** @var FHIROid */
    protected $sopclass = null;

    /** @var FHIRString */
    protected $type = null;

    /** @var FHIRString */
    protected $title = null;

    /** @var FHIRUri */
    protected $url = null;

    /** @var FHIRResourceInterface */
    protected $attachment = null;

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
     * @return FHIROid
     */
    public function getSopclass()
    {
        return $this->sopclass;
    }

    /**
     * @param FHIROid $sopclass
     */
    public function setSopclass(FHIROid $sopclass)
    {
        $this->sopclass = $sopclass;
    }

    /**
     * @return FHIRString
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRString $type
     */
    public function setType(FHIRString $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param FHIRString $title
     */
    public function setTitle(FHIRString $title)
    {
        $this->title = $title;
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
     * @return FHIRResourceInterface
     */
    public function getAttachment()
    {
        return $this->attachment;
    }

    /**
     * @param FHIRResourceInterface $attachment
     */
    public function setAttachment(FHIRResourceInterface $attachment)
    {
        $this->attachment = $attachment;
    }
}