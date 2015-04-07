<?php namespace FHIR\Resources\Administrative\Organization;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRContact as FHIRContactElement;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRHumanName;

/**
 * Class FHIROrganizationContact
 * @package FHIR\Resources\Administrative\Organization
 */
class FHIROrganizationContact extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $purpose = null;

    /** @var FHIRHumanName */
    protected $name = null;

    /** @var FHIRContactElement[]|ElementCollection */
    protected $telecom;

    /** @var FHIRAddress */
    protected $address = null;

    /** @var FHIRCodeableConcept */
    protected $gender = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->telecom = new ElementCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * @param FHIRCodeableConcept $purpose
     */
    public function setPurpose(FHIRCodeableConcept $purpose)
    {
        $this->purpose = $purpose;
    }

    /**
     * @return FHIRHumanName
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRHumanName $name
     */
    public function setName(FHIRHumanName $name)
    {
        $this->name = $name;
    }

    /**
     * @return ElementCollection|FHIRContactElement[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * @param FHIRContactElement $telecom
     */
    public function addTelecom(FHIRContactElement $telecom)
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
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param FHIRCodeableConcept $gender
     */
    public function setGender(FHIRCodeableConcept $gender)
    {
        $this->gender = $gender;
    }
}