<?php namespace FHIR\Resources\Administrative\Patient;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact as FHIRContactElement;
use FHIR\Elements\Complex\FHIRHumanName;
use FHIR\Resources\Administrative\FHIROrganization;

/**
 * Class FHIROrganizationContact
 * @package FHIR\Resources\Administrative\Patient
 */
class FHIRContact extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $relationship;

    /** @var FHIRHumanName */
    protected $name = null;

    /** @var FHIRContactElement[]|ElementCollection */
    protected $telecom;

    /** @var FHIRAddress */
    protected $address = null;

    /** @var FHIRCodeableConcept */
    protected $gender = null;

    /** @var FHIROrganization */
    protected $organization = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->relationship = new ElementCollection();
        $this->telecom = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param FHIRCodeableConcept $relationship
     */
    public function addRelationship(FHIRCodeableConcept$relationship)
    {
        $this->relationship->append($relationship);
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
     * @return ElementCollection|\FHIR\Elements\Complex\FHIRContact[]
     */
    public function getTelecom()
    {
        return $this->telecom;
    }

    /**
     * @param \FHIR\Elements\Complex\FHIRContact $telecom
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

    /**
     * @return FHIROrganization
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param FHIROrganization $organization
     */
    public function setOrganization(FHIROrganization $organization)
    {
        $this->organization = $organization;
    }
}