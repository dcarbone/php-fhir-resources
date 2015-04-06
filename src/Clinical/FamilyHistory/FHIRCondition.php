<?php namespace FHIR\Resources\Clinical\FamilyHistory;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRRange;
use FHIR\Elements\Complex\Quantity\FHIRAge;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRCondition
 * @package FHIR\Elements\Component
 */
class FHIRCondition extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept */
    protected $outcome = null;

    /** @var FHIRAge|FHIRRange|FHIRString */
    protected $onset = null;

    /** @var FHIRString */
    protected $note = null;

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
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param FHIRCodeableConcept $outcome
     */
    public function setOutcome(FHIRCodeableConcept $outcome)
    {
        $this->outcome = $outcome;
    }

    /**
     * @return FHIRAge|FHIRRange|FHIRString
     */
    public function getOnset()
    {
        return $this->onset;
    }

    /**
     * @param FHIRAge|FHIRRange|FHIRString $onset
     */
    public function setOnset($onset)
    {
        if ($onset instanceof FHIRAge ||
            $onset instanceof FHIRRange ||
            $onset instanceof FHIRString)
        {
            $this->onset = $onset;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException('onset', 'FHIRAge, FHIRRange, or FHIRString', $onset);
        }
    }

    /**
     * @return FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param FHIRString $note
     */
    public function setNote(FHIRString $note)
    {
        $this->note = $note;
    }
}