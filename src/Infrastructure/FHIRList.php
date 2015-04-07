<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Infrastructure\FHIRList\FHIRListEntry;

/**
 * Class FHIRList
 * @package FHIR\Resources\Infrastructure
 */
class FHIRList extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRPatient|FHIRGroup|FHIRDevice|FHIRLocation */
    protected $subject = null;

    /** @var FHIRPractitioner|FHIRPatient|FHIRDevice */
    protected $source = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRBoolean */
    protected $ordered = null;

    /** @var FHIRCode */
    protected $mode = null;

    /** @var FHIRCodeableConcept */
    protected $emptyReason = null;

    /** @var FHIRListEntry[]|ResourceComponentCollection */
    protected $entry;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->entry = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRLocation ||
            $subject instanceof FHIRPatient)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRLocation, or FHIRPatient',
                $subject);
        }
    }

    /**
     * @return FHIRDevice|FHIRPatient|FHIRPractitioner
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRDevice|FHIRPatient|FHIRPractitioner $source
     */
    public function setSource($source)
    {
        if ($source instanceof FHIRDevice ||
            $source instanceof FHIRPatient ||
            $source instanceof FHIRPractitioner)
        {
            $this->source = $source;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'source',
                'FHIRDevice, FHIRPatient, or FHIRPractitioner',
                $source);
        }
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
     * @return FHIRBoolean
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * @param FHIRBoolean $ordered
     */
    public function setOrdered(FHIRBoolean $ordered)
    {
        $this->ordered = $ordered;
    }

    /**
     * @return FHIRCode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param FHIRCode $mode
     */
    public function setMode(FHIRCode $mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getEmptyReason()
    {
        return $this->emptyReason;
    }

    /**
     * @param FHIRCodeableConcept $emptyReason
     */
    public function setEmptyReason(FHIRCodeableConcept $emptyReason)
    {
        $this->emptyReason = $emptyReason;
    }

    /**
     * @return ResourceComponentCollection|FHIRListEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param FHIRListEntry $entry
     */
    public function addEntry(FHIRListEntry $entry)
    {
        $this->entry->append($entry);
    }
}