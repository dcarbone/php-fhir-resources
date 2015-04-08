<?php namespace FHIR\Resources\Clinical\ImmunizationRecommendation;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Resources\Clinical\FHIRObservation;
use FHIR\Resources\Clinical\FHIRAdverseReaction;
use FHIR\Resources\Clinical\FHIRAllergyIntolerance;
use FHIR\Resources\Clinical\FHIRImmunization;

/**
 * Class FHIRImmunizationRecommendationRecommendation
 * @package FHIR\Resources\Clinical\ImmunizationRecommendation
 */
class FHIRImmunizationRecommendationRecommendation extends AbstractFHIRObject
{
    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRCodeableConcept */
    protected $vaccineType = null;

    /** @var FHIRInteger */
    protected $doseNumber = null;

    /** @var FHIRCodeableConcept */
    protected $forecastStatus = null;

    /** @var FHIRImmunization[]|ResourceCollection */
    protected $supportingImmunization;

    /** @var \FHIR\Resources\Clinical\FHIRObservation[]|FHIRAdverseReaction[]|FHIRAllergyIntolerance[]|ResourceCollection */
    protected $supportingPatientInformation;

    /** @var FHIRImmunizationRecommendationRecommendationProtocol[]|ResourceComponentCollection */
    protected $protocol;

    /** @var FHIRImmunizationRecommendationRecommendationDateCriterion[]|ResourceComponentCollection */
    protected $dateCriterion;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->supportingImmunization = new ResourceCollection();
        $this->supportingPatientInformation = new ResourceCollection();
        $this->protocol = new ResourceComponentCollection();
        $this->dateCriterion = new ResourceComponentCollection();
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
     * @return FHIRCodeableConcept
     */
    public function getVaccineType()
    {
        return $this->vaccineType;
    }

    /**
     * @param FHIRCodeableConcept $vaccineType
     */
    public function setVaccineType(FHIRCodeableConcept $vaccineType)
    {
        $this->vaccineType = $vaccineType;
    }

    /**
     * @return FHIRInteger
     */
    public function getDoseNumber()
    {
        return $this->doseNumber;
    }

    /**
     * @param FHIRInteger $doseNumber
     */
    public function setDoseNumber(FHIRInteger $doseNumber)
    {
        $this->doseNumber = $doseNumber;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getForecastStatus()
    {
        return $this->forecastStatus;
    }

    /**
     * @param FHIRCodeableConcept $forecastStatus
     */
    public function setForecastStatus(FHIRCodeableConcept $forecastStatus)
    {
        $this->forecastStatus = $forecastStatus;
    }

    /**
     * @return ResourceCollection|FHIRImmunization[]
     */
    public function getSupportingImmunization()
    {
        return $this->supportingImmunization;
    }

    /**
     * @param FHIRImmunization $supportingImmunization
     */
    public function addSupportingImmunization(FHIRImmunization $supportingImmunization)
    {
        $this->supportingImmunization->append($supportingImmunization);
    }

    /**
     * @return ResourceCollection|FHIRAdverseReaction[]|FHIRAllergyIntolerance[]|FHIRObservation[]
     */
    public function getSupportingPatientInformation()
    {
        return $this->supportingPatientInformation;
    }

    /**
     * @param FHIRAdverseReaction|FHIRAllergyIntolerance|\FHIR\Resources\Clinical\FHIRObservation $supportingPatientInformation
     */
    public function addSupportingPatientInformation($supportingPatientInformation)
    {
        if ($supportingPatientInformation instanceof FHIRAdverseReaction ||
            $supportingPatientInformation instanceof FHIRAllergyIntolerance ||
            $supportingPatientInformation instanceof FHIRObservation)
        {
            $this->supportingPatientInformation->append($supportingPatientInformation);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'supportingPatientInformation',
                'FHIRAdverseReaction, FHIRAllergyIntolerance, or FHIRObservation',
                $supportingPatientInformation);
        }
    }

    /**
     * @return ResourceComponentCollection|FHIRImmunizationRecommendationRecommendationProtocol[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param FHIRImmunizationRecommendationRecommendationProtocol $protocol
     */
    public function addProtocol(FHIRImmunizationRecommendationRecommendationProtocol $protocol)
    {
        $this->protocol->append($protocol);
    }

    /**
     * @return ResourceComponentCollection|FHIRImmunizationRecommendationRecommendationDateCriterion[]
     */
    public function getDateCriterion()
    {
        return $this->dateCriterion;
    }

    /**
     * @param FHIRImmunizationRecommendationRecommendationDateCriterion $dateCriterion
     */
    public function addDateCriterion(FHIRImmunizationRecommendationRecommendationDateCriterion $dateCriterion)
    {
        $this->dateCriterion->append($dateCriterion);
    }
}