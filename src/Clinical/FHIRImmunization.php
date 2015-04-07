<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Clinical\Immunization\FHIRImmunizationExplanation;
use FHIR\Resources\Clinical\Immunization\FHIRImmunizationReaction;
use FHIR\Resources\Clinical\Immunization\FHIRImmunizationVaccinationProtocol;

/**
 * Class FHIRImmunization
 * @package FHIR\Resources\Clinical
 */
class FHIRImmunization extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRCodeableConcept */
    protected $vaccineType = null;

    /** @var \FHIR\Resources\Administrative\FHIRPatient */
    protected $subject = null;

    /** @var FHIRBoolean */
    protected $refusedIndicator = null;

    /** @var FHIRBoolean */
    protected $reported = null;

    /** @var \FHIR\Resources\Administrative\FHIRPractitioner */
    protected $performer = null;

    /** @var \FHIR\Resources\Administrative\FHIRPractitioner */
    protected $requester = null;

    /** @var \FHIR\Resources\Administrative\FHIROrganization */
    protected $manufacturer = null;

    /** @var FHIRLocation */
    protected $location = null;

    /** @var FHIRString */
    protected $lotNumber = null;

    /** @var FHIRDate */
    protected $expirationDate = null;

    /** @var FHIRCodeableConcept */
    protected $site = null;

    /** @var FHIRCodeableConcept */
    protected $route = null;

    /** @var FHIRQuantity */
    protected $doseQuantity = null;

    /** @var FHIRImmunizationExplanation */
    protected $explanation = null;

    /** @var FHIRImmunizationVaccinationProtocol[]|ResourceComponentCollection */
    protected $vaccinationProtocol;

    /** @var FHIRImmunizationReaction[]|ResourceComponentCollection */
    protected $reaction;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->vaccinationProtocol = new ResourceComponentCollection();
        $this->reaction = new ResourceComponentCollection();
    }

    /**
     * @return FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param FHIRDateTime $date
     */
    public function setDate(FHIRDateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getVaccineType()
    {
        return $this->vaccineType;
    }

    /**
     * @param FHIRCodeableConcept $vaccineType
     */
    public function setVaccineType(FHIRCodeableConcept $vaccineType)
    {
        $this->vaccineType = $vaccineType;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return FHIRBoolean
     */
    public function getRefusedIndicator()
    {
        return $this->refusedIndicator;
    }

    /**
     * @param FHIRBoolean $refusedIndicator
     */
    public function setRefusedIndicator(FHIRBoolean $refusedIndicator)
    {
        $this->refusedIndicator = $refusedIndicator;
    }

    /**
     * @return FHIRBoolean
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * @param FHIRBoolean $reported
     */
    public function setReported(FHIRBoolean $reported)
    {
        $this->reported = $reported;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPractitioner $performer
     */
    public function setPerformer(FHIRPractitioner $performer)
    {
        $this->performer = $performer;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getRequester()
    {
        return $this->requester;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPractitioner $requester
     */
    public function setRequester(FHIRPractitioner $requester)
    {
        $this->requester = $requester;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIROrganization
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param FHIROrganization $manufacturer
     */
    public function setManufacturer(FHIROrganization $manufacturer)
    {
        $this->manufacturer = $manufacturer;
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
     * @return FHIRDate
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @param FHIRDate $expirationDate
     */
    public function setExpirationDate(FHIRDate $expirationDate)
    {
        $this->expirationDate = $expirationDate;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSite()
    {
        return $this->site;
    }

    /**
     * @param FHIRCodeableConcept $site
     */
    public function setSite(FHIRCodeableConcept $site)
    {
        $this->site = $site;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getRoute()
    {
        return $this->route;
    }

    /**
     * @param FHIRCodeableConcept $route
     */
    public function setRoute(FHIRCodeableConcept $route)
    {
        $this->route = $route;
    }

    /**
     * @return FHIRQuantity
     */
    public function getDoseQuantity()
    {
        return $this->doseQuantity;
    }

    /**
     * @param FHIRQuantity $doseQuantity
     */
    public function setDoseQuantity(FHIRQuantity $doseQuantity)
    {
        $this->doseQuantity = $doseQuantity;
    }

    /**
     * @return FHIRImmunizationExplanation
     */
    public function getExplanation()
    {
        return $this->explanation;
    }

    /**
     * @param FHIRImmunizationExplanation $explanation
     */
    public function setExplanation(FHIRImmunizationExplanation $explanation)
    {
        $this->explanation = $explanation;
    }

    /**
     * @return ResourceComponentCollection|FHIRImmunizationVaccinationProtocol[]
     */
    public function getVaccinationProtocol()
    {
        return $this->vaccinationProtocol;
    }

    /**
     * @param FHIRImmunizationVaccinationProtocol $vaccinationProtocol
     */
    public function addVaccinationProtocol(FHIRImmunizationVaccinationProtocol $vaccinationProtocol)
    {
        $this->vaccinationProtocol->append($vaccinationProtocol);
    }

    /**
     * @return ResourceComponentCollection|FHIRImmunizationReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * @param FHIRImmunizationReaction $reaction
     */
    public function addReaction(FHIRImmunizationReaction $reaction)
    {
        $this->reaction->append($reaction);
    }
}