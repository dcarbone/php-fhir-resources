<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRAttachment;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Complex\FHIRHumanName;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Practitioner\FHIRQualification;

/**
 * Class FHIRPractitioner
 * @package FHIR\Resources\Administrative
 */
class FHIRPractitioner extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRHumanName */
    protected $name = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRAddress */
    protected $address = null;

    /** @var FHIRCodeableConcept */
    protected $gender = null;

    /** @var FHIRDateTime */
    protected $birthDate = null;

    /** @var FHIRAttachment[]|ElementCollection */
    protected $photo;

    /** @var FHIROrganization */
    protected $organization;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $role;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $speciality;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRLocation[]|ResourceCollection */
    protected $location;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $communication;

    /** @var FHIRQualification[]|ResourceComponentCollection */
    protected $qualification;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
        $this->photo = new ElementCollection();
        $this->role = new ElementCollection();
        $this->speciality = new ElementCollection();
        $this->location = new ResourceCollection();
        $this->communication = new ElementCollection();
        $this->qualification = new ResourceComponentCollection();
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
     * @return FHIRDateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param FHIRDateTime $birthDate
     */
    public function setBirthDate(FHIRDateTime $birthDate)
    {
        $this->birthDate = $birthDate;
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

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param FHIRCodeableConcept $role
     */
    public function addRole(FHIRCodeableConcept $role)
    {
        $this->role->append($role);
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * @param FHIRCodeableConcept $speciality
     */
    public function addSpeciality(FHIRCodeableConcept $speciality)
    {
        $this->speciality->append($speciality);
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }

    /**
     * @return ResourceCollection|FHIRLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRLocation $location
     */
    public function addLocation(FHIRLocation $location)
    {
        $this->location->append($location);
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getCommunication()
    {
        return $this->communication;
    }

    /**
     * @param FHIRCodeableConcept $communication
     */
    public function addCommunication(FHIRCodeableConcept $communication)
    {
        $this->communication->append($communication);
    }

    /**
     * @return ResourceComponentCollection|FHIRQualification[]
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * @param FHIRQualification $qualification
     */
    public function addQualification(FHIRQualification $qualification)
    {
        $this->qualification->append($qualification);
    }
}