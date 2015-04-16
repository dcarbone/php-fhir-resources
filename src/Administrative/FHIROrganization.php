<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRAddress;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRContact;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Organization\FHIROrganizationContact;

/**
 * Class FHIROrganization
 * @package FHIR\Resources\Administrative
 */
class FHIROrganization extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRAddress[]|ElementCollection */
    protected $address;

    /** @var FHIROrganization */
    protected $partOf = null;

    /** @var FHIRLocation[]|ResourceCollection */
    protected $location;

    /** @var FHIRBoolean */
    protected $active = null;

    /** @var FHIROrganizationContact[]|ResourceComponentCollection */
    protected $contact;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->telecom = new ElementCollection();
        $this->location = new ResourceCollection();
        $this->address = new ElementCollection();
        $this->contact = new ResourceComponentCollection();
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
     * @return FHIROrganization
     */
    public function getPartOf()
    {
        return $this->partOf;
    }

    /**
     * @param FHIROrganization $partOf
     */
    public function setPartOf(FHIROrganization $partOf)
    {
        $this->partOf = $partOf;
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
     * @return ResourceComponentCollection|FHIROrganizationContact[]
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * @param FHIROrganizationContact $contact
     */
    public function addContact(FHIROrganizationContact $contact)
    {
        $this->contact->append($contact);
    }
}