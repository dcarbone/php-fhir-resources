<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Clinical\ImmunizationRecommendation\FHIRImmunizationRecommendationRecommendation;

/**
 * Class FHIRImmunizationRecommendation
 * @package FHIR\Resources\Clinical
 */
class FHIRImmunizationRecommendation extends FHIRResource
{
    /** @var FHIRPatient */
    protected $subject = null;

    /** @var FHIRImmunizationRecommendationRecommendation[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRImmunizationRecommendationRecommendation[]
     */
    public function getRecommendation()
    {
        return $this->recommendation;
    }

    /**
     * @param FHIRImmunizationRecommendationRecommendation $recommendation
     */
    public function addRecommendation(FHIRImmunizationRecommendationRecommendation $recommendation)
    {
        $this->recommendation->append($recommendation);
    }
}