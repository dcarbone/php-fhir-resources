<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Clinical\ImmunizationRecommendation\FHIRRecommendation;

/**
 * Class FHIRImmunizationRecommendation
 * @package FHIR\Resources\Clinical
 */
class FHIRImmunizationRecommendation extends FHIRResource
{
    /** @var FHIRPatient */
    protected $subject = null;

    /** @var FHIRRecommendation[]|ResourceComponentCollection */
    protected $recommendation;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->recommendation = new ResourceComponentCollection();
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
     * @return ResourceComponentCollection|FHIRRecommendation[]
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * @param FHIRRecommendation $recommendation
     */
    public function addRecommendation(FHIRRecommendation $recommendation)
    {
        $this->recommendation->append($recommendation);
    }
}