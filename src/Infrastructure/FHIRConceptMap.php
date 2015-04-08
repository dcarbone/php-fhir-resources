<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\ConceptMap\FHIRConceptMapConcept;

/**
 * Class FHIRConceptMap
 * @package FHIR\Resources\Infrastructure
 */
class FHIRConceptMap extends FHIRResource
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

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRBoolean */
    protected $experimental = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRValueSet */
    protected $source = null;

    /** @var FHIRValueSet */
    protected $target = null;

    /** @var FHIRConceptMapConcept[]|ResourceComponentCollection */
    protected $concept;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
        $this->concept = new ResourceComponentCollection();
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
     * @return FHIRValueSet
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRValueSet $source
     */
    public function setSource(FHIRValueSet $source)
    {
        $this->source = $source;
    }

    /**
     * @return FHIRValueSet
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRValueSet $target
     */
    public function setTarget(FHIRValueSet $target)
    {
        $this->target = $target;
    }

    /**
     * @return ResourceComponentCollection|FHIRConceptMapConcept[]
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * @param FHIRConceptMapConcept $concept
     */
    public function addConcept(FHIRConceptMapConcept $concept)
    {
        $this->concept->append($concept);
    }
}