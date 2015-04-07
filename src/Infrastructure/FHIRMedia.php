<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Elements\Complex\FHIRAttachment;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\FHIRSpecimen;

/**
 * Class FHIRMedia
 * @package FHIR\Resources\Infrastructure
 */
class FHIRMedia extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRCodeableConcept */
    protected $subtype = null;

    /** @var FHIRDateTime */
    protected $dateTime = null;

    /** @var FHIRPatient|FHIRPractitioner|FHIRGroup|FHIRDevice|FHIRSpecimen */
    protected $subject = null;

    /** @var FHIRPractitioner */
    protected $operator = null;

    /** @var FHIRCodeableConcept */
    protected $view = null;

    /** @var FHIRString */
    protected $deviceName = null;

    /** @var FHIRInteger */
    protected $height = null;

    /** @var FHIRInteger */
    protected $width = null;

    /** @var FHIRInteger */
    protected $frames = null;

    /** @var FHIRInteger */
    protected $length = null;

    /** @var FHIRAttachment */
    protected $content = null;

    /**
     * @return FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCode $type
     */
    public function setType(FHIRCode $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @param FHIRCodeableConcept $subtype
     */
    public function setSubtype(FHIRCodeableConcept $subtype)
    {
        $this->subtype = $subtype;
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
     * @return FHIRDevice|FHIRGroup|FHIRPatient|FHIRPractitioner|FHIRSpecimen
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRPatient|FHIRPractitioner|FHIRSpecimen $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRPatient ||
            $subject instanceof FHIRPractitioner ||
            $subject instanceof FHIRSpecimen)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRPatient, FHIRPractitioner, or FHIRSpeciemn',
                $subject);
        }
    }

    /**
     * @return FHIRPractitioner
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * @param FHIRPractitioner $operator
     */
    public function setOperator(FHIRPractitioner $operator)
    {
        $this->operator = $operator;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * @param FHIRCodeableConcept $view
     */
    public function setView(FHIRCodeableConcept $view)
    {
        $this->view = $view;
    }

    /**
     * @return FHIRString
     */
    public function getDeviceName()
    {
        return $this->deviceName;
    }

    /**
     * @param FHIRString $deviceName
     */
    public function setDeviceName(FHIRString $deviceName)
    {
        $this->deviceName = $deviceName;
    }

    /**
     * @return FHIRInteger
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param FHIRInteger $height
     */
    public function setHeight(FHIRInteger $height)
    {
        $this->height = $height;
    }

    /**
     * @return FHIRInteger
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @param FHIRInteger $width
     */
    public function setWidth(FHIRInteger $width)
    {
        $this->width = $width;
    }

    /**
     * @return FHIRInteger
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * @param FHIRInteger $frames
     */
    public function setFrames(FHIRInteger $frames)
    {
        $this->frames = $frames;
    }

    /**
     * @return FHIRInteger
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param FHIRInteger $length
     */
    public function setLength(FHIRInteger $length)
    {
        $this->length = $length;
    }

    /**
     * @return FHIRAttachment
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param FHIRAttachment $content
     */
    public function setContent(FHIRAttachment $content)
    {
        $this->content = $content;
    }
}