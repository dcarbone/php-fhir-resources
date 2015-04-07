<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\Supply\FHIRSupplyDispense;
use FHIR\Resources\Clinical\FHIRMedication;
use FHIR\Resources\FHIRResource;

/**
 * Class FHIRSupply
 * @package FHIR\Resources\Administrative
 */
class FHIRSupply extends FHIRResource
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRCodeableConcept */
    protected $kind = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRMedication|FHIRSubstance|FHIRDevice */
    protected $orderedItem = null;

    /** @var FHIRPatient */
    protected $patient = null;

    /** @var FHIRSupplyDispense[]|ResourceComponentCollection */
    protected $dispense;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->dispense = new ResourceComponentCollection();
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
     * @return FHIRCodeableConcept
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param FHIRCodeableConcept $kind
     */
    public function setKind(FHIRCodeableConcept $kind)
    {
        $this->kind = $kind;
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
     * @return FHIRDevice|FHIRMedication|FHIRSubstance
     */
    public function getOrderedItem()
    {
        return $this->orderedItem;
    }

    /**
     * @param FHIRDevice|FHIRMedication|FHIRSubstance $orderedItem
     */
    public function setOrderedItem($orderedItem)
    {
        if ($orderedItem instanceof FHIRDevice ||
            $orderedItem instanceof FHIRMedication ||
            $orderedItem instanceof FHIRSubstance)
        {
            $this->orderedItem = $orderedItem;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'orderedItem',
                'FHIRDevice, FHIRMedication, or FHIRSubstance',
                $orderedItem);
        }
    }

    /**
     * @return FHIRPatient
     */
    public function getPatient()
    {
        return $this->patient;
    }

    /**
     * @param FHIRPatient $patient
     */
    public function setPatient(FHIRPatient $patient)
    {
        $this->patient = $patient;
    }

    /**
     * @return ResourceComponentCollection|FHIRSupplyDispense[]
     */
    public function getDispense()
    {
        return $this->dispense;
    }

    /**
     * @param FHIRSupplyDispense $dispense
     */
    public function addDispense(FHIRSupplyDispense $dispense)
    {
        $this->dispense->append($dispense);
    }
}