<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIROid;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\ImagingStudy\FHIRSeries;

/**
 * Class FHIRImagingStudy
 * @package FHIR\Resources\Clinical
 */
class FHIRImagingStudy extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRDateTime */
    protected $dateTime = null;

    /** @var FHIRPatient */
    protected $subject = null;

    /** @var FHIROid */
    protected $uid = null;

    /** @var FHIRIdentifier */
    protected $accessionNo = null;

    /** @var FHIRDiagnosticOrder[]|ResourceCollection */
    protected $order;

    /** @var FHIRCode[]|ElementCollection */
    protected $modality;

    /** @var FHIRPractitioner */
    protected $referrer = null;

    /** @var FHIRCode */
    protected $availability = null;

    /** @var FHIRUri */
    protected $uri = null;

    /** @var FHIRInteger */
    protected $numberOfSeries = null;

    /** @var FHIRInteger */
    protected $numberOfInstances = null;

    /** @var FHIRString */
    protected $clinicalInformation = null;

    /** @var FHIRCoding[]|ElementCollection */
    protected $procedure;

    /** @var FHIRPractitioner */
    protected $interpreter = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRSeries[]|ResourceComponentCollection */
    protected $series;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->order = new ResourceCollection();
        $this->modality = new ElementCollection();
        $this->series = new ResourceComponentCollection();
    }

    /**
     * @return FHIRDateTime
     */
    public function getDateTime()
    {
        return $this->dateTime;
    }

    /**
     * @param FHIRDateTime $dateTime
     */
    public function setDateTime(FHIRDateTime $dateTime)
    {
        $this->dateTime = $dateTime;
    }

    /**
     * @return FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return FHIROid
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param FHIROid $uid
     */
    public function setUid(FHIROid $uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return FHIRIdentifier
     */
    public function getAccessionNo()
    {
        return $this->accessionNo;
    }

    /**
     * @param FHIRIdentifier $accessionNo
     */
    public function setAccessionNo(FHIRIdentifier $accessionNo)
    {
        $this->accessionNo = $accessionNo;
    }

    /**
     * @return ResourceCollection|FHIRDiagnosticOrder[]
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param FHIRDiagnosticOrder $order
     */
    public function addOrder(FHIRDiagnosticOrder $order)
    {
        $this->order->append($order);
    }

    /**
     * @return ElementCollection|FHIRCode[]
     */
    public function getModality()
    {
        return $this->modality;
    }

    /**
     * @param FHIRCode $modality
     */
    public function addModality(FHIRCode $modality)
    {
        $this->modality->append($modality);
    }

    /**
     * @return FHIRPractitioner
     */
    public function getReferrer()
    {
        return $this->referrer;
    }

    /**
     * @param FHIRPractitioner $referrer
     */
    public function setReferrer(FHIRPractitioner $referrer)
    {
        $this->referrer = $referrer;
    }

    /**
     * @return FHIRCode
     */
    public function getAvailability()
    {
        return $this->availability;
    }

    /**
     * @param FHIRCode $availability
     */
    public function setAvailability(FHIRCode $availability)
    {
        $this->availability = $availability;
    }

    /**
     * @return FHIRUri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param FHIRUri $uri
     */
    public function setUri(FHIRUri $uri)
    {
        $this->uri = $uri;
    }

    /**
     * @return FHIRInteger
     */
    public function getNumberOfSeries()
    {
        return $this->numberOfSeries;
    }

    /**
     * @param FHIRInteger $numberOfSeries
     */
    public function setNumberOfSeries(FHIRInteger $numberOfSeries)
    {
        $this->numberOfSeries = $numberOfSeries;
    }

    /**
     * @return FHIRInteger
     */
    public function getNumberOfInstances()
    {
        return $this->numberOfInstances;
    }

    /**
     * @param FHIRInteger $numberOfInstances
     */
    public function setNumberOfInstances(FHIRInteger$numberOfInstances)
    {
        $this->numberOfInstances = $numberOfInstances;
    }

    /**
     * @return FHIRString
     */
    public function getClinicalInformation()
    {
        return $this->clinicalInformation;
    }

    /**
     * @param FHIRString $clinicalInformation
     */
    public function setClinicalInformation(FHIRString $clinicalInformation)
    {
        $this->clinicalInformation = $clinicalInformation;
    }

    /**
     * @return FHIRCoding[]|ElementCollection
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * @param FHIRCoding $procedure
     */
    public function setProcedure(FHIRCoding $procedure)
    {
        $this->procedure->append($procedure);
    }

    /**
     * @return FHIRPractitioner
     */
    public function getInterpreter()
    {
        return $this->interpreter;
    }

    /**
     * @param FHIRPractitioner $interpreter
     */
    public function setInterpreter(FHIRPractitioner $interpreter)
    {
        $this->interpreter = $interpreter;
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
     * @return FHIRSeries[]|ResourceComponentCollection
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param FHIRSeries $series
     */
    public function addSeries(FHIRSeries $series)
    {
        $this->series->append($series);
    }
}