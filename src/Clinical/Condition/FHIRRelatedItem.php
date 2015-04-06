<?php namespace FHIR\Resources\Clinical\Condition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\Clinical\FHIRCondition;
use FHIR\Resources\Clinical\FHIRProcedure;
use FHIR\Resources\Clinical\FHIRImmunization;
use FHIR\Resources\Clinical\FHIRMedicationAdministration;
use FHIR\Resources\Clinical\FHIRMedicationStatement;

/**
 * Class FHIRRelatedItem
 * @package FHIR\Resources\Clinical\Condition
 */
class FHIRRelatedItem extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRCondition|FHIRProcedure|FHIRMedicationAdministration|FHIRImmunization|FHIRMedicationStatement */
    protected $target = null;

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
     * @return FHIRCondition|FHIRImmunization|FHIRMedicationAdministration|FHIRMedicationStatement|FHIRProcedure
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRCondition|FHIRImmunization|FHIRMedicationAdministration|FHIRMedicationStatement|FHIRProcedure $target
     */
    public function setTarget($target)
    {
        if ($target instanceof FHIRCondition ||
            $target instanceof FHIRImmunization ||
            $target instanceof FHIRMedicationAdministration ||
            $target instanceof FHIRMedicationStatement ||
            $target instanceof FHIRProcedure)
        {
            $this->target = $target;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'target',
                'FHIRCondition, FHIRImmunization, FHIRMedicationAdministration, FHIRMedicationStatement, or FHIRProcedure',
                $target);
        }
    }
}