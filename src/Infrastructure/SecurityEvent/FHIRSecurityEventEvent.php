<?php namespace FHIR\Resources\Infrastructure\SecurityEvent;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRSecurityEventEvent
 * @package FHIR\Resources\Infrastructure\SecurityEvent
 */
class FHIRSecurityEventEvent extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $subtype;

    /** @var FHIRCode */
    protected $action = null;

    /** @var FHIRInstant */
    protected $dateTime = null;

    /** @var FHIRCode */
    protected $outcome = null;

    /** @var FHIRString */
    protected $outcomeDesc = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->subtype = new ElementCollection();
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
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getSubtype()
    {
        return $this->subtype;
    }

    /**
     * @param FHIRCodeableConcept $subtype
     */
    public function addSubtype(FHIRCodeableConcept $subtype)
    {
        $this->subtype->append($subtype);
    }

    /**
     * @return FHIRCode
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param FHIRCode $action
     */
    public function setAction(FHIRCode $action)
    {
        $this->action = $action;
    }

    /**
     * @return FHIRInstant
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param FHIRInstant $dateTime
     */
    public function setDateTime(FHIRInstant $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return FHIRCode
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param FHIRCode $outcome
     */
    public function setOutcome(FHIRCode $outcome)
    {
        $this->outcome = $outcome;
    }

    /**
     * @return FHIRString
     */
    public function getOutcomeDesc()
    {
        return $this->outcomeDesc;
    }

    /**
     * @param FHIRString $outcomeDesc
     */
    public function setOutcomeDesc(FHIRString $outcomeDesc)
    {
        $this->outcomeDesc = $outcomeDesc;
    }
}