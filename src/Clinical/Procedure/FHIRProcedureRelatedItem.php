<?php namespace FHIR\Resources\Clinical\Procedure;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Clinical\FHIRDeviceObservationReport;
use FHIR\Resources\Clinical\FHIRDiagnosticReport;
use FHIR\Resources\Clinical\FHIRImagingStudy;
use FHIR\Resources\Clinical\FHIRObservation;
use FHIR\Resources\Clinical\FHIRAdverseReaction;
use FHIR\Resources\Clinical\FHIRAllergyIntolerance;
use FHIR\Resources\Clinical\FHIRCarePlan;
use FHIR\Resources\Clinical\FHIRCondition;
use FHIR\Resources\Clinical\FHIRFamilyHistory;
use FHIR\Resources\Clinical\FHIRProcedure;
use FHIR\Resources\Clinical\FHIRImmunization;
use FHIR\Resources\Clinical\FHIRImmunizationRecommendation;
use FHIR\Resources\Clinical\FHIRMedicationAdministration;
use FHIR\Resources\Clinical\FHIRMedicationDispense;
use FHIR\Resources\Clinical\FHIRMedicationPrescription;
use FHIR\Resources\Clinical\FHIRMedicationStatement;

/**
 * Class FHIRConditionRelatedItem
 * @package FHIR\Resources\Clinical\Procedure
 */
class FHIRProcedureRelatedItem extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRAdverseReaction|FHIRAllergyIntolerance|FHIRCarePlan|FHIRCondition|FHIRDeviceObservationReport|FHIRDiagnosticReport|FHIRFamilyHistory|FHIRImagingStudy|FHIRImmunization|FHIRImmunizationRecommendation|FHIRMedicationAdministration|FHIRMedicationDispense|FHIRMedicationPrescription|FHIRMedicationStatement|\FHIR\Resources\Clinical\FHIRObservation|FHIRProcedure */
    protected $target = null;

    /**
     * @return FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCode $type
     */
    public function setType(FHIRCode $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRAdverseReaction|FHIRAllergyIntolerance|FHIRCarePlan|FHIRCondition|FHIRDeviceObservationReport|FHIRDiagnosticReport|FHIRFamilyHistory|FHIRImagingStudy|FHIRImmunization|FHIRImmunizationRecommendation|FHIRMedicationAdministration|FHIRMedicationDispense|FHIRMedicationPrescription|FHIRMedicationStatement|FHIRObservation|FHIRProcedure
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRAdverseReaction|FHIRAllergyIntolerance|FHIRCarePlan|FHIRCondition|FHIRDeviceObservationReport|FHIRDiagnosticReport|FHIRFamilyHistory|FHIRImagingStudy|FHIRImmunization|FHIRImmunizationRecommendation|FHIRMedicationAdministration|FHIRMedicationDispense|FHIRMedicationPrescription|FHIRMedicationStatement|FHIRObservation|FHIRProcedure $target
     */
    public function setTarget($target)
    {
        if ($target instanceof FHIRAdverseReaction ||
            $target instanceof FHIRAllergyIntolerance ||
            $target instanceof FHIRCarePlan ||
            $target instanceof FHIRCondition ||
            $target instanceof FHIRDeviceObservationReport ||
            $target instanceof FHIRDiagnosticReport ||
            $target instanceof FHIRFamilyHistory ||
            $target instanceof FHIRImagingStudy |
            $target instanceof FHIRImmunization ||
            $target instanceof FHIRImmunizationRecommendation ||
            $target instanceof FHIRMedicationAdministration ||
            $target instanceof FHIRMedicationDispense ||
            $target instanceof FHIRMedicationPrescription ||
            $target instanceof FHIRMedicationStatement ||
            $target instanceof FHIRObservation ||
            $target instanceof FHIRProcedure)
        {
            $this->target = $target;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'target',
                'FHIRAdverseReaction, FHIRAllergyIntolerance, FHIRCarePlan, FHIRFamilyHistoryCondition, FHIRDeviceObservationReport, '.
                'FHIRDiagnosticReport, FHIRFamilyHistory, FHIRImagingStudy, FHIRImmunization, FHIRImmunizationRecommendation, '.
                'FHIRMedicationAdministration, FHIRMedicationDispense, FHIRMedicationPrescription, FHIRMedicationStatement, '.
                'FHIRObservation, or FHIRProcedure',
                $target);
        }
    }
}