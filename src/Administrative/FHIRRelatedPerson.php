<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRAttachment;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Complex\FHIRHumanName;
use FHIR\Resources\AbstractFHIRIdentifiableResource;

/**
 * Class FHIRRelatedPerson
 * @package FHIR\Resources\Administrative
 */
class FHIRRelatedPerson extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRPatient */
    protected $patient = null;

    /** @var FHIRCodeableConcept */
    protected $relationship = null;

    /** @var FHIRHumanName */
    protected $name = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRCodeableConcept */
    protected $gender = null;

    /** @var FHIRAddress */
    protected $address = null;

    /** @var FHIRAttachment[]|ElementCollection */
    protected $photo;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
        $this->photo = new ElementCollection();
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
     * @return FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param FHIRCodeableConcept $relationship
     */
    public function setRelationship(FHIRCodeableConcept $relationship)
    {
        $this->relationship = $relationship;
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
     * @return ElementCollection|FHIRAttachment[]
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * @param FHIRAttachment $photo
     */
    public function addPhoto(FHIRAttachment $photo)
    {
        $this->photo->append($photo);
    }
}