<?php namespace FHIR\Resources\Clinical\ImmunizationRecommendation;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIROrganization;

/**
 * Class FHIRImmunizationRecommendationProtocol
 * @package FHIR\Resources\Clinical\ImmunizationRecommendation
 */
class FHIRImmunizationRecommendationProtocol extends AbstractFHIRObject
{
    /** @var FHIRInteger */
    protected $doseSequence = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIROrganization */
    protected $authority = null;

    /** @var FHIRString */
    protected $series = null;

    /**
     * @return FHIRInteger
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * @param FHIRInteger $doseSequence
     */
    public function setDoseSequence(FHIRInteger $doseSequence)
    {
        $this->doseSequence = $doseSequence;
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
     * @return \FHIR\Resources\Administrative\FHIROrganization
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIROrganization $authority
     */
    public function setAuthority(FHIROrganization $authority)
    {
        $this->authority = $authority;
    }

    /**
     * @return FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param FHIRString $series
     */
    public function setSeries(FHIRString $series)
    {
        $this->series = $series;
    }
}