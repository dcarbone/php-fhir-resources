<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\Quantity\FHIRAge;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\Condition\FHIRConditionEvidence;
use FHIR\Resources\Clinical\Condition\FHIRConditionLocation;
use FHIR\Resources\Clinical\Condition\FHIRConditionRelatedItem;
use FHIR\Resources\Clinical\Condition\FHIRConditionStage;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRCondition
 * @package FHIR\Resources\Clinical
 */
class FHIRCondition extends AbstractFHIRIdentifiableResource
{
    /** @var \FHIR\Resources\Administrative\FHIRPatient */
    protected $subject = null;

    /** @var  \FHIR\Resources\Administrative\FHIREncounter */
    protected $encounter = null;

    /** @var \FHIR\Resources\Administrative\FHIRPractitioner|\FHIR\Resources\Administrative\FHIRPatient */
    protected $asserter = null;

    /** @var FHIRDate */
    protected $dateAsserted = null;

    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRCodeableConcept */
    protected $category = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCodeableConcept */
    protected $certainty = null;

    /** @var FHIRCodeableConcept */
    protected $severity = null;

    /** @var FHIRDate|FHIRAge */
    protected $onset = null;

    /** @var FHIRDate|FHIRAge|FHIRBoolean */
    protected $abatement = null;

    /** @var FHIRString */
    protected $notes = null;

    /** @var FHIRConditionStage */
    protected $stage = null;

    /** @var FHIRConditionEvidence[]|ResourceComponentCollection */
    protected $evidence;

    /** @var FHIRConditionLocation[]|ResourceComponentCollection */
    protected $location;

    /** @var FHIRConditionRelatedItem[]|ResourceComponentCollection */
    protected $relatedItem;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->evidence = new ResourceComponentCollection();
        $this->location = new ResourceComponentCollection();
        $this->relatedItem = new ResourceComponentCollection();
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
     * @return \FHIR\Resources\Administrative\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIREncounter $encounter
     */
    public function setEncounter(FHIREncounter $encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * @return FHIRPatient|\FHIR\Resources\Administrative\FHIRPractitioner
     */
    public function getAsserter()
    {
        return $this->asserter;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPatient|\FHIR\Resources\Administrative\FHIRPractitioner $asserter
     */
    public function setAsserter($asserter)
    {
        if ($asserter instanceof FHIRPatient || $asserter instanceof FHIRPractitioner)
            $this->asserter = $asserter;
        else
            throw $this->createInvalidPropertyValueTypeException('asserter', 'FHIRPatient or FHIRPractitioner', $asserter);
    }

    /**
     * @return FHIRDate
     */
    public function getDateAsserted()
    {
        return $this->dateAsserted;
    }

    /**
     * @param FHIRDate $dateAsserted
     */
    public function setDateAsserted(FHIRDate $dateAsserted)
    {
        $this->dateAsserted = $dateAsserted;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param FHIRCodeableConcept $category
     */
    public function setCategory(FHIRCodeableConcept$category)
    {
        $this->category = $category;
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
     * @return FHIRCodeableConcept
     */
    public function getCertainty()
    {
        return $this->certainty;
    }

    /**
     * @param FHIRCodeableConcept $certainty
     */
    public function setCertainty(FHIRCodeableConcept $certainty)
    {
        $this->certainty = $certainty;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @param FHIRCodeableConcept $severity
     */
    public function setSeverity(FHIRCodeableConcept $severity)
    {
        $this->severity = $severity;
    }

    /**
     * @return \FHIR\Elements\Complex\Quantity\FHIRAge|FHIRDate
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * @param FHIRAge|FHIRDate $onset
     */
    public function setOnset($onset)
    {
        if ($onset instanceof FHIRAge || $onset instanceof FHIRDate)
            $this->onset = $onset;
        else
            throw $this->createInvalidPropertyValueTypeException('onset', 'FHIRAge or FHIRDate', $onset);
    }

    /**
     * @return \FHIR\Elements\Complex\Quantity\FHIRAge|FHIRBoolean|FHIRDate
     */
    public function getAbatement()
    {
        return $this->abatement;
    }

    /**
     * @param FHIRAge|FHIRBoolean|FHIRDate $abatement
     */
    public function setAbatement($abatement)
    {
        if ($abatement instanceof FHIRAge ||
            $abatement instanceof FHIRBoolean ||
            $abatement instanceof FHIRdate)
        {
            $this->abatement = $abatement;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException('abatement', 'FHIRAge, FHIRBoolean, or FHIRDate', $abatement);
        }
    }

    /**
     * @return FHIRString
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @param FHIRString $notes
     */
    public function setNotes(FHIRString $notes)
    {
        $this->notes = $notes;
    }

    /**
     * @return FHIRConditionStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param FHIRConditionStage $stage
     */
    public function setStage(FHIRConditionStage $stage)
    {
        $this->stage = $stage;
    }

    /**
     * @return ResourceComponentCollection|FHIRConditionEvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * @param FHIRConditionEvidence $evidence
     */
    public function addEvidence(FHIRConditionEvidence $evidence)
    {
        $this->evidence->append($evidence);
    }

    /**
     * @return ResourceComponentCollection|FHIRConditionLocation[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRConditionLocation $location
     */
    public function addLocation(FHIRConditionLocation $location)
    {
        $this->location->append($location);
    }

    /**
     * @return ResourceComponentCollection|FHIRConditionRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * @param FHIRConditionRelatedItem $relatedItem
     */
    public function addRelatedItem(FHIRConditionRelatedItem $relatedItem)
    {
        $this->relatedItem->append($relatedItem);
    }
}