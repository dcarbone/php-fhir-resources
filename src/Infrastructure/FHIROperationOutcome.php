<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\OperationOutcome\FHIROperationOutcomeIssue;

/**
 * Class FHIROperationOutcome
 * @package FHIR\Resources\Infrastructure
 */
class FHIROperationOutcome extends FHIRResource
{
    /** @var FHIROperationOutcomeIssue[]|ResourceComponentCollection */
    protected $issue;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->issue = new ResourceComponentCollection();
    }

    /**
     * @return ResourceComponentCollection|FHIROperationOutcomeIssue[]
     */
    public function getIssue()
    {
        return $this->issue;
    }

    /**
     * @param FHIROperationOutcomeIssue $issue
     */
    public function addIssue(FHIROperationOutcomeIssue $issue)
    {
        $this->issue->append($issue);
    }
}