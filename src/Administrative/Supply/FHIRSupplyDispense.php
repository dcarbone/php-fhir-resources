<?php namespace FHIR\Resources\Administrative\Supply;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRSubstance;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRSupplyDispense
 * @package FHIR\Resources\Administrative\Supply
 */
class FHIRSupplyDispense extends AbstractFHIRObject
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /** @var FHIRMedication|FHIRSubstance|FHIRDevice */
    protected $suppliedItem = null;

    /** @var FHIRPractitioner */
    protected $supplier = null;

    /** @var FHIRPeriod */
    protected $whenPrepared = null;

    /** @var FHIRPeriod */
    protected $whenHandedOver = null;

    /** @var FHIRLocation */
    protected $destination = null;

    /** @var FHIRPractitioner[]|ResourceCollection */
    protected $receiver;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->receiver = new ResourceCollection();
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
     * @return FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRQuantity $quantity
     */
    public function setQuantity(FHIRQuantity $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return FHIRDevice|FHIRMedication|FHIRSubstance
     */
    public function getSuppliedItem()
    {
        return $this->suppliedItem;
    }

    /**
     * @param FHIRDevice|FHIRMedication|FHIRSubstance $suppliedItem
     */
    public function setSuppliedItem($suppliedItem)
    {
        if ($suppliedItem instanceof FHIRDevice ||
            $suppliedItem instanceof FHIRMedication ||
            $suppliedItem instanceof FHIRSubstance)
        {
            $this->suppliedItem = $suppliedItem;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'suppliedItem',
                'FHIRDevice, FHIRMedication, or FHIRSubstance',
                $suppliedItem);
        }
    }

    /**
     * @return FHIRPractitioner
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @param FHIRPractitioner $supplier
     */
    public function setSupplier(FHIRPractitioner $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @return FHIRPeriod
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * @param FHIRPeriod $whenPrepared
     */
    public function setWhenPrepared(FHIRPeriod $whenPrepared)
    {
        $this->whenPrepared = $whenPrepared;
    }

    /**
     * @return FHIRPeriod
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * @param FHIRPeriod $whenHandedOver
     */
    public function setWhenHandedOver(FHIRPeriod $whenHandedOver)
    {
        $this->whenHandedOver = $whenHandedOver;
    }

    /**
     * @return FHIRLocation
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param FHIRLocation $destination
     */
    public function setDestination(FHIRLocation $destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return ResourceCollection|FHIRPractitioner[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param FHIRPractitioner $receiver
     */
    public function addReceiver(FHIRPractitioner $receiver)
    {
        $this->receiver->append($receiver);
    }
}