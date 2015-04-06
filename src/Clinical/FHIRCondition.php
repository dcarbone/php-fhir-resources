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
use FHIR\Resources\Clinical\Condition\FHIREvidence;
use FHIR\Resources\Clinical\Condition\FHIRLocation;
use FHIR\Resources\Clinical\Condition\FHIRRelatedItem;
use FHIR\Resources\Clinical\Condition\FHIRStage;
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

    /** @var FHIRStage */
    protected $stage = null;

    /** @var FHIREvidence[]|ResourceComponentCollection */
    protected $evidence;

    /** @var FHIRLocation[]|ResourceComponentCollection */
    protected $location;

    /** @var FHIRRelatedItem[]|ResourceComponentCollection */
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
     * @return FHIRStage
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * @param FHIRStage $stage
     */
    public function setStage(FHIRStage $stage)
    {
        $this->stage = $stage;
    }

    /**
     * @return ResourceComponentCollection|FHIREvidence[]
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * @param FHIREvidence $evidence
     */
    public function addEvidence(FHIREvidence $evidence)
    {
        $this->evidence->append($evidence);
    }

    /**
     * @return ResourceComponentCollection|FHIRLocation[]
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
     * @return ResourceComponentCollection|FHIRRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * @param FHIRRelatedItem $relatedItem
     */
    public function addRelatedItem(FHIRRelatedItem $relatedItem)
    {
        $this->relatedItem->append($relatedItem);
    }
}