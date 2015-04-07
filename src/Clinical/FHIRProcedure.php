<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Clinical\Procedure\FHIRProcedurePerformer;
use FHIR\Resources\Clinical\Procedure\FHIRProcedureRelatedItem;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRProcedure
 * @package FHIR\Resources\Clinical
 */
class FHIRProcedure extends AbstractFHIRIdentifiableResource
{
    /** @var \FHIR\Resources\Administrative\FHIRPatient */
    protected $subject = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $bodySite;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $indication;

    /** @var FHIRPeriod */
    protected $date = null;

    /** @var \FHIR\Resources\Administrative\FHIREncounter */
    protected $encounter = null;

    /** @var FHIRString */
    protected $outcome = null;

    /** @var FHIRDiagnosticReport[]|ResourceCollection */
    protected $report;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $complication;

    /** @var FHIRString */
    protected $followUp = null;

    /** @var FHIRString */
    protected $notes = null;

    /** @var FHIRProcedurePerformer[]|ResourceComponentCollection */
    protected $performer;

    /** @var FHIRProcedureRelatedItem[]|ResourceComponentCollection */
    protected $relatedItem;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->bodySite = new ElementCollection();
        $this->indication = new ElementCollection();
        $this->report = new ResourceCollection();
        $this->complication = new ElementCollection();
        $this->performer = new ResourceComponentCollection();
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
     * @param \FHIR\Resources\Administrative\FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
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
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * @param FHIRCodeableConcept $bodySite
     */
    public function addBodySite(FHIRCodeableConcept $bodySite)
    {
        $this->bodySite->append($bodySite);
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getIndication()
    {
        return $this->indication;
    }

    /**
     * @param FHIRCodeableConcept $indication
     */
    public function addIndication(FHIRCodeableConcept $indication)
    {
        $this->indication->append($indication);
    }

    /**
     * @return FHIRPeriod
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param FHIRPeriod $date
     */
    public function setDate(FHIRPeriod $date)
    {
        $this->date = $date;
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
     * @return FHIRString
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param FHIRString $outcome
     */
    public function setOutcome(FHIRString $outcome)
    {
        $this->outcome = $outcome;
    }

    /**
     * @return ResourceCollection|FHIRDiagnosticReport[]
     */
    public function getReport()
    {
        return $this->report;
    }

    /**
     * @param FHIRDiagnosticReport $report
     */
    public function setReport(FHIRDiagnosticReport $report)
    {
        $this->report->append($report);
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getComplication()
    {
        return $this->complication;
    }

    /**
     * @param FHIRCodeableConcept $complication
     */
    public function addComplication(FHIRCodeableConcept $complication)
    {
        $this->complication->append($complication);
    }

    /**
     * @return FHIRString
     */
    public function getFollowUp()
    {
        return $this->followUp;
    }

    /**
     * @param FHIRString $followUp
     */
    public function setFollowUp(FHIRString $followUp)
    {
        $this->followUp = $followUp;
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
     * @return ResourceComponentCollection|FHIRProcedurePerformer[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param FHIRProcedurePerformer $performer
     */
    public function addPerformer(FHIRProcedurePerformer $performer)
    {
        $this->performer->append($performer);
    }

    /**
     * @return ResourceComponentCollection|FHIRProcedureRelatedItem[]
     */
    public function getRelatedItem()
    {
        return $this->relatedItem;
    }

    /**
     * @param FHIRProcedureRelatedItem $relatedItem
     */
    public function addRelatedItem(FHIRProcedureRelatedItem $relatedItem)
    {
        $this->relatedItem->append($relatedItem);
    }
}