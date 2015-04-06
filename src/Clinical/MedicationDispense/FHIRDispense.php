<?php namespace FHIR\Resources\Clinical\MedicationDispense;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRDispense
 * @package FHIR\Resources\Clinical\MedicationDispense
 */
class FHIRDispense extends AbstractFHIRObject
{
    /** @var FHIRIdentifier[]|ElementCollection */
    protected $identifier;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /** @var FHIRMedication */
    protected $medication = null;

    /** @var FHIRDateTime */
    protected $whenPrepared = null;

    /** @var FHIRDateTime */
    protected $whenHandedOver = null;

    /** @var FHIRLocation */
    protected $destination = null;

    /** @var \FHIR\Resources\Administrative\FHIRPatient[]|\FHIR\Resources\Administrative\FHIRPractitioner[]|ResourceCollection */
    protected $receiver;

    /** @var FHIRDosage[]|ResourceComponentCollection */
    protected $dosage;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->identifier = new ElementCollection();
        $this->receiver = new ResourceCollection();
        $this->dosage = new ResourceComponentCollection();
    }

    /**
     * @return ElementCollection|FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function addIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier->append($identifier);
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
     * @return FHIRMedication
     */
    public function getMedication()
    {
        return $this->medication;
    }

    /**
     * @param FHIRMedication $medication
     */
    public function setMedication(FHIRMedication $medication)
    {
        $this->medication = $medication;
    }

    /**
     * @return FHIRDateTime
     */
    public function getWhenPrepared()
    {
        return $this->whenPrepared;
    }

    /**
     * @param FHIRDateTime $whenPrepared
     */
    public function setWhenPrepared(FHIRDateTime $whenPrepared)
    {
        $this->whenPrepared = $whenPrepared;
    }

    /**
     * @return FHIRDateTime
     */
    public function getWhenHandedOver()
    {
        return $this->whenHandedOver;
    }

    /**
     * @param FHIRDateTime $whenHandedOver
     */
    public function setWhenHandedOver(FHIRDateTime $whenHandedOver)
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
     * @return ResourceCollection|FHIRPatient[]|\FHIR\Resources\Administrative\FHIRPractitioner[]
     */
    public function getReceiver()
    {
        return $this->receiver;
    }

    /**
     * @param ResourceCollection|FHIRPatient[]|\FHIR\Resources\Administrative\FHIRPractitioner[] $receiver
     */
    public function addReceiver($receiver)
    {
        if ($receiver instanceof FHIRPatient || $receiver instanceof FHIRPractitioner)
            $this->receiver->append($receiver);
        else
            throw $this->createInvalidCollectionValueException('receiver', 'FHIRPatient or FHIRPractitioner', $receiver);
    }

    /**
     * @return ResourceComponentCollection|FHIRDosage[]
     */
    public function getDosage()
    {
        return $this->dosage;
    }

    /**
     * @param FHIRDosage $dosage
     */
    public function addDosage(FHIRDosage $dosage)
    {
        $this->dosage->append($dosage);
    }
}