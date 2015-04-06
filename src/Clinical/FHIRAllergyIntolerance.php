<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRSubstance;

/**
 * Class FHIRAllergyIntolerance
 * @package FHIR\Resource
 */
class FHIRAllergyIntolerance extends AbstractFHIRIdentifiableResource
{
    // TODO implement http://www.hl7.org/implement/standards/fhir/criticality.html
    // TODO implement http://www.hl7.org/implement/standards/fhir/sensitivitytype.html
    // TODO implement http://www.hl7.org/implement/standards/fhir/sensitivitystatus.html

    /** @var FHIRCode */
    protected $criticality = null;

    /** @var FHIRCode */
    protected $sensitivityType = null;

    /** @var FHIRDateTime */
    protected $recordedDate = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var \FHIR\Resources\Administrative\FHIRPatient */
    protected $subject = null;

    /** @var FHIRPatient|FHIRPractitioner */
    protected $recorder = null;

    /** @var \FHIR\Resources\Administrative\FHIRSubstance */
    protected $substance = null;

    /** @var FHIRAdverseReaction[]|ResourceCollection */
    protected $reaction;

    /** @var \FHIR\Resources\Clinical\FHIRObservation[]|ResourceCollection */
    protected $sensitivityTest;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->reaction = new ResourceCollection();
        $this->sensitivityTest = new ResourceCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getCriticality()
    {
        return $this->criticality;
    }

    /**
     * @param FHIRCode $criticality
     */
    public function setCriticality(FHIRCode $criticality)
    {
        $this->criticality = $criticality;
    }

    /**
     * @return FHIRCode
     */
    public function getSensitivityType()
    {
        return $this->sensitivityType;
    }

    /**
     * @param FHIRCode $sensitivityType
     */
    public function setSensitivityType(FHIRCode $sensitivityType)
    {
        $this->sensitivityType = $sensitivityType;
    }

    /**
     * @return FHIRDateTime
     */
    public function getRecordedDate()
    {
        return $this->recordedDate;
    }

    /**
     * @param FHIRDateTime $recordedDate
     */
    public function setRecordedDate(FHIRDateTime $recordedDate)
    {
        $this->recordedDate = $recordedDate;
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
     * @return \FHIR\Resources\Administrative\FHIRPatient|FHIRPractitioner
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * @param FHIRPatient|FHIRPractitioner $recorder
     */
    public function setRecorder($recorder)
    {
        if ($recorder instanceof FHIRPractitioner || $recorder instanceof FHIRPatient)
            $this->recorder = $recorder;
        else
            throw $this->createInvalidPropertyValueTypeException('recorder', 'FHIRPractitioner or FHIRPatient', $recorder);
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRSubstance $substance
     */
    public function setSubstance(FHIRSubstance $substance)
    {
        $this->substance = $substance;
    }

    /**
     * @return ResourceCollection|FHIRAdverseReaction[]
     */
    public function getReaction()
    {
        return $this->reaction;
    }

    /**
     * @param FHIRAdverseReaction $reaction
     */
    public function addReaction(FHIRAdverseReaction $reaction)
    {
        $this->reaction->append($reaction);
    }

    /**
     * @return ResourceCollection|\FHIR\Resources\Clinical\FHIRObservation[]
     */
    public function getSensitivityTest()
    {
        return $this->sensitivityTest;
    }

    /**
     * @param \FHIR\Resources\Clinical\FHIRObservation $sensitivityTest
     */
    public function addSensitivityTest(FHIRObservation $sensitivityTest)
    {
        $this->sensitivityTest->append($sensitivityTest);
    }
}