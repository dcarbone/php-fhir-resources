<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIREncounter;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\Composition\FHIRCompositionAttester;
use FHIR\Resources\Infrastructure\Composition\FHIRCompositionEvent;
use FHIR\Resources\Infrastructure\Composition\FHIRCompositionSection;

/**
 * Class FHIRComposition
 * @package FHIR\Resources\Infrastructure
 */
class FHIRComposition extends FHIRResource
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRDate */
    protected $date = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept */
    protected $class = null;

    /** @var FHIRString */
    protected $title = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCoding */
    protected $confidentiality = null;

    /** @var FHIRPatient|FHIRPractitioner|FHIRGroup|FHIRDevice|FHIRLocation */
    protected $subject = null;

    /** @var FHIRPractitioner|FHIRDevice|FHIRPatient|FHIRRelatedPerson */
    protected $author;

    /** @var FHIROrganization */
    protected $custodian = null;

    /** @var FHIREncounter */
    protected $encounter = null;

    /** @var FHIRCompositionSection[]|ResourceComponentCollection */
    protected $section;

    /** @var FHIRCompositionAttester[]|ResourceComponentCollection */
    protected $attester;

    /** @var FHIRCompositionEvent */
    protected $event = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->section = new ResourceComponentCollection();
        $this->attester = new ResourceComponentCollection();
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
     * @return FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param FHIRDate $date
     */
    public function setDate(FHIRDate $date)
    {
        $this->date = $date;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCodeableConcept $type
     */
    public function setType(FHIRCodeableConcept $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param FHIRCodeableConcept $class
     */
    public function setClass(FHIRCodeableConcept $class)
    {
        $this->class = $class;
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
     * @return FHIRCoding
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * @param FHIRCoding $confidentiality
     */
    public function setConfidentiality(FHIRCoding $confidentiality)
    {
        $this->confidentiality = $confidentiality;
    }

    /**
     * @return FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient|FHIRPractitioner
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient|FHIRPractitioner $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRLocation ||
            $subject instanceof FHIRPatient ||
            $subject instanceof FHIRPractitioner)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRLocation, FHIRPatient, or FHIRPractitioner',
                $subject);
        }
    }

    /**
     * @return FHIRDevice|FHIRPatient|FHIRPractitioner|FHIRRelatedPerson
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param FHIRDevice|FHIRPatient|FHIRPractitioner|FHIRRelatedPerson $author
     */
    public function setAuthor($author)
    {
        if ($author instanceof FHIRDevice ||
            $author instanceof FHIRPatient ||
            $author instanceof FHIRPractitioner ||
            $author instanceof FHIRRelatedPerson)
        {
            $this->author = $author;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'author',
                'FHIRDevice, FHIRPatient, FHIRPractitioner, or FHIRRelatedPerson',
                $author);
        }
    }

    /**
     * @return FHIROrganization
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * @param FHIROrganization $custodian
     */
    public function setCustodian(FHIROrganization $custodian)
    {
        $this->custodian = $custodian;
    }

    /**
     * @return FHIREncounter
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * @param FHIREncounter $encounter
     */
    public function setEncounter(FHIREncounter $encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * @return ResourceComponentCollection|FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param FHIRCompositionSection $section
     */
    public function addSection(FHIRCompositionSection $section)
    {
        $this->section->append($section);
    }

    /**
     * @return ResourceComponentCollection|FHIRCompositionAttester[]
     */
    public function getAttester()
    {
        return $this->attester;
    }

    /**
     * @param FHIRCompositionAttester $attester
     */
    public function addAttester(FHIRCompositionAttester $attester)
    {
        $this->attester->append($attester);
    }

    /**
     * @return FHIRCompositionEvent
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRCompositionEvent $event
     */
    public function setEvent(FHIRCompositionEvent $event)
    {
        $this->event = $event;
    }
}