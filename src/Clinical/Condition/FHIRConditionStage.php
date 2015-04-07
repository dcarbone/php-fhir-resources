<?php namespace FHIR\Resources\Clinical\Condition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRConditionStage
 * @package FHIR\Resources\Clinical\Condition
 */
class FHIRConditionStage extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $summary = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $assessment;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assessment = new ResourceCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param FHIRCodeableConcept $summary
     */
    public function setSummary(FHIRCodeableConcept $summary)
    {
        $this->summary = $summary;
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getAssessment()
    {
        return $this->assessment;
    }

    /**
     * @param FHIRResourceInterface $assessment
     */
    public function addAssessment(FHIRResourceInterface $assessment)
    {
        $this->assessment->append($assessment);
    }
}