<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRAttachment;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Complex\FHIRHumanName;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Patient\FHIRPatientAnimal;
use FHIR\Resources\Administrative\Patient\FHIRPatientContact;
use FHIR\Resources\Administrative\Patient\FHIRPatientLink;

/**
 * Class FHIRPatient
 * @package FHIR\Resources\Administrative
 */
class FHIRPatient extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRHumanName[]|ElementCollection */
    protected $name;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRCodeableConcept */
    protected $gender = null;

    /** @var FHIRDateTime */
    protected $birthDate = null;

    /** @var FHIRBoolean|FHIRDateTime */
    protected $deceased = null;

    /** @var FHIRAddress[]|ElementCollection */
    protected $address;

    /** @var FHIRCodeableConcept */
    protected $maritalStatus = null;

    /** @var FHIRBoolean|FHIRInteger */
    protected $multipleBirth = null;

    /** @var FHIRAttachment[]|ElementCollection */
    protected $photo;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $communication;

    /** @var FHIROrganization[]|FHIRPractitioner[]|ResourceCollection */
    protected $careProvider;

    /** @var FHIROrganization */
    protected $managingOrganization = null;

    /** @var FHIRBoolean */
    protected $active = null;

    /** @var FHIRPatientAnimal */
    protected $animal = null;

    /** @var FHIRPatientLink[]|ResourceComponentCollection */
    protected $link;

    /** @var FHIRPatientContact[]|ResourceComponentCollection */
    protected $contact;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->name = new ElementCollection();
        $this->telecom = new ElementCollection();
        $this->address = new ElementCollection();
        $this->photo = new ElementCollection();
        $this->communication = new ElementCollection();
        $this->careProvider = new ResourceCollection();
        $this->link = new ResourceComponentCollection();
        $this->contact = new ResourceComponentCollection();
    }

    /**
     * @return ElementCollection|FHIRHumanName[]
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRHumanName $name
     */
    public function addName(FHIRHumanName $name)
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
     * @return FHIRBoolean|FHIRDateTime
     */
    public function getDeceased()
    {
        return $this->deceased;
    }

    /**
     * @param FHIRBoolean|FHIRDateTime $deceased
     */
    public function setDeceased($deceased)
    {
        if ($deceased instanceof FHIRBoolean || $deceased instanceof FHIRDateTime)
            $this->deceased = $deceased;
        else
            throw $this->createInvalidPropertyValueTypeException('deceased', 'FHIRBoolean or FHIRDateTime', $deceased);
    }

    /**
     * @return ElementCollection|FHIRAddress[]
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param FHIRAddress $address
     */
    public function addAddress(FHIRAddress $address)
    {
        $this->address->append($address);
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getMaritalStatus()
    {
        return $this->maritalStatus;
    }

    /**
     * @param FHIRCodeableConcept $maritalStatus
     */
    public function setMaritalStatus(FHIRCodeableConcept $maritalStatus)
    {
        $this->maritalStatus = $maritalStatus;
    }

    /**
     * @return FHIRBoolean|FHIRInteger
     */
    public function getMultipleBirth()
    {
        return $this->multipleBirth;
    }

    /**
     * @param FHIRBoolean|FHIRInteger $multipleBirth
     */
    public function setMultipleBirth($multipleBirth)
    {
        if ($multipleBirth instanceof FHIRBoolean || $multipleBirth instanceof FHIRInteger)
        {
            $this->multipleBirth = $multipleBirth;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'multipleBirth',
                'FHIRBoolean or FHIRInteger',
                $multipleBirth);
        }
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
     * @return ResourceCollection|FHIROrganization[]|FHIRPractitioner[]
     */
    public function getCareProvider()
    {
        return $this->careProvider;
    }

    /**
     * @param ResourceCollection|FHIROrganization[]|FHIRPractitioner[] $careProvider
     */
    public function addCareProvider($careProvider)
    {
        if ($careProvider instanceof FHIROrganization || $careProvider instanceof FHIRPractitioner)
        {
            $this->careProvider->append($careProvider);
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'careProvider',
                'FHIROrganization or FHIRPractitioner',
                $careProvider);
        }
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
     * @return FHIRBoolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * @param FHIRBoolean $active
     */
    public function setActive(FHIRBoolean $active)
    {
        $this->active = $active;
    }

    /**
     * @return FHIRPatientAnimal
     */
    public function getAnimal()
    {
        return $this->animal;
    }

    /**
     * @param FHIRPatientAnimal $animal
     */
    public function setAnimal(FHIRPatientAnimal $animal)
    {
        $this->animal = $animal;
    }

    /**
     * @return ResourceComponentCollection|FHIRPatientLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param FHIRPatientLink $link
     */
    public function addLink(FHIRPatientLink $link)
    {
        $this->link->append($link);
    }

    /**
     * @return ResourceComponentCollection|FHIRPatientContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param FHIRPatientContact $contact
     */
    public function addContact(FHIRPatientContact $contact)
    {
        $this->contact->append($contact);
    }
}