<?php namespace FHIR\Resources\Clinical\CarePlan;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Clinical\FHIRCondition;

/**
 * Class FHIRCarePlanGoal
 * @package FHIR\Resources\Clinical\CarePlan
 */
class FHIRCarePlanGoal extends AbstractFHIRObject
{
    // TODO Implement http://www.hl7.org/implement/standards/fhir/care-plan-goal-status.html

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRString */
    protected $notes = null;

    /** @var FHIRCondition[]|ResourceCollection */
    protected $concern = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->concern = new ResourceCollection();
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
     * @return ResourceCollection|FHIRCondition[]
     */
    public function getConcern()
    {
        return $this->concern;
    }

    /**
     * @param FHIRCondition $concern
     */
    public function addConcern(FHIRCondition$concern)
    {
        $this->concern->append($concern);
    }
}