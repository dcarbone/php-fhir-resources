<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Location\FHIRLocationPosition;

/**
 * Class FHIRConditionLocation
 * @package FHIR\Resources\Administrative
 */
class FHIRLocation extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRAddress */
    protected $address = null;

    /** @var FHIRCodeableConcept */
    protected $physicalType = null;

    /** @var FHIROrganization */
    protected $managingOrganization = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRLocation */
    protected $partOf = null;

    /** @var FHIRCode */
    protected $mode = null;

    /** @var FHIRLocationPosition */
    protected $position = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
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
     * @return FHIRAddress
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param FHIRAddress $address
     */
    public function setAddress(FHIRAddress $address)
    {
        $this->address = $address;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getPhysicalType()
    {
        return $this->physicalType;
    }

    /**
     * @param FHIRCodeableConcept $physicalType
     */
    public function setPhysicalType(FHIRCodeableConcept $physicalType)
    {
        $this->physicalType = $physicalType;
    }

    /**
     * @return FHIROrganization
     */
    public function getManagingOrganization()
    {
        return $this->managingOrganization;
    }

    /**
     * @param FHIROrganization $managingOrganization
     */
    public function setManagingOrganization(FHIROrganization $managingOrganization)
    {
        $this->managingOrganization = $managingOrganization;
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
     * @return FHIRLocation
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * @param FHIRLocation $partOf
     */
    public function setPartOf(FHIRLocation $partOf)
    {
        $this->partOf = $partOf;
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
     * @return FHIRLocationPosition
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * @param FHIRLocationPosition $position
     */
    public function setPosition(FHIRLocationPosition $position)
    {
        $this->position = $position;
    }
}