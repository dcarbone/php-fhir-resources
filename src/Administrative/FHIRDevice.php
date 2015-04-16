<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Resources\AbstractFHIRIdentifiableResource;

/**
 * Class FHIRDevice
 * @package FHIR\Resources\Administrative
 */
class FHIRDevice extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRString */
    protected $manufacturer = null;

    /** @var FHIRString */
    protected $model = null;

    /** @var FHIRString */
    protected $version = null;

    /** @var FHIRDate */
    protected $expiry = null;

    /** @var FHIRString */
    protected $udi = null;

    /** @var FHIRString */
    protected $lotNumber = null;

    /** @var FHIROrganization */
    protected $owner = null;

    /** @var FHIRLocation */
    protected $location =  null;

    /** @var FHIRPatient */
    protected $patient = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $contact;

    /** @var FHIRUri */
    protected $url = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->url = new ElementCollection();
        $this->contact = new ElementCollection();
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
     * @return FHIRString
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param FHIRString $manufacturer
     */
    public function setManufacturer(FHIRString $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return FHIRString
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param FHIRString $model
     */
    public function setModel(FHIRString $model)
    {
        $this->model = $model;
    }

    /**
     * @return FHIRString
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param FHIRString $version
     */
    public function setVersion(FHIRString $version)
    {
        $this->version = $version;
    }

    /**
     * @return FHIRDate
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @param FHIRDate $expiry
     */
    public function setExpiry(FHIRDate $expiry)
    {
        $this->expiry = $expiry;
    }

    /**
     * @return FHIRString
     */
    public function getUdi()
    {
        return $this->udi;
    }

    /**
     * @param FHIRString $udi
     */
    public function setUdi(FHIRString $udi)
    {
        $this->udi = $udi;
    }

    /**
     * @return FHIRString
     */
    public function getLotNumber()
    {
        return $this->lotNumber;
    }

    /**
     * @param FHIRString $lotNumber
     */
    public function setLotNumber(FHIRString $lotNumber)
    {
        $this->lotNumber = $lotNumber;
    }

    /**
     * @return FHIROrganization
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @param FHIROrganization $owner
     */
    public function setOwner(FHIROrganization $owner)
    {
        $this->owner = $owner;
    }

    /**
     * @return FHIRLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRLocation $location
     */
    public function setLocation(FHIRLocation $location)
    {
        $this->location = $location;
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
     * @return ElementCollection|FHIRContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param FHIRContact $contact
     */
    public function addContact(FHIRContact $contact)
    {
        $this->contact->append($contact);
    }

    /**
     * @return FHIRUri
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param FHIRUri $url
     */
    public function setUrl(FHIRUri $url)
    {
        $this->url = $url;
    }
}