<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\AdverseReaction\FHIRExposure;
use FHIR\Resources\Clinical\AdverseReaction\FHIRSymptom;

/**
 * Class FHIRAdverseReaction
 * @package FHIR\Resources\Clinical
 */
class FHIRAdverseReaction extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRPatient */
    protected $subject = null;

    /** @var FHIRBoolean */
    protected $didNotOccurFlag = null;

    /** @var \FHIR\Resources\Administrative\FHIRPractitioner|FHIRPatient */
    protected $recorder = null;

    /** @var FHIRSymptom[]|ResourceComponentCollection */
    protected $symptom;

    /** @var FHIRExposure[]|ResourceComponentCollection */
    protected $exposure;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->symptom = new ResourceComponentCollection();
        $this->exposure = new ResourceComponentCollection();
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
     * @return FHIRBoolean
     */
    public function getDidNotOccurFlag()
    {
        return $this->didNotOccurFlag;
    }

    /**
     * @param FHIRBoolean $didNotOccurFlag
     */
    public function setDidNotOccurFlag(FHIRBoolean $didNotOccurFlag)
    {
        $this->didNotOccurFlag = $didNotOccurFlag;
    }

    /**
     * @return FHIRPatient|\FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getRecorder()
    {
        return $this->recorder;
    }

    /**
     * @param FHIRPatient|\FHIR\Resources\Administrative\FHIRPractitioner $recorder
     */
    public function setRecorder($recorder)
    {
        if ($recorder instanceof FHIRPatient || $recorder instanceof FHIRPractitioner)
            $this->recorder = $recorder;
        else
            throw $this->createInvalidPropertyValueTypeException('recorder', 'FHIRPractitioner or FHIRPatient', $recorder);
    }

    /**
     * @return ResourceComponentCollection|FHIRSymptom[]
     */
    public function getSymptom()
    {
        return $this->symptom;
    }

    /**
     * @param FHIRSymptom $symptom
     */
    public function addSymptom(FHIRSymptom $symptom)
    {
        $this->symptom->append($symptom);
    }

    /**
     * @return ResourceComponentCollection|FHIRExposure[]
     */
    public function getExposure()
    {
        return $this->exposure;
    }

    /**
     * @param FHIRExposure $exposure
     */
    public function setExposure(FHIRExposure $exposure)
    {
        $this->exposure->append($exposure);
    }
}