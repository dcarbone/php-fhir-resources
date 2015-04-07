<?php namespace FHIR\Resources\Clinical\Immunization;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Resources\Clinical\FHIRObservation;
use FHIR\Resources\Clinical\FHIRAdverseReaction;

/**
 * Class FHIRImmunizationReaction
 * @package FHIR\Resources\Clinical\Immunization
 */
class FHIRImmunizationReaction extends AbstractFHIRObject
{
    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRAdverseReaction|FHIRObservation */
    protected $detail = null;

    /** @var FHIRBoolean */
    protected $reported = null;

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
     * @return FHIRAdverseReaction|FHIRObservation
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param FHIRAdverseReaction|FHIRObservation $detail
     */
    public function setDetail($detail)
    {
        if ($detail instanceof FHIRAdverseReaction || $detail instanceof FHIRObservation)
            $this->detail = $detail;
        else
            throw $this->createInvalidPropertyValueTypeException('detail', 'FHIRObservation or FHIRAdverseReaction', $detail);
    }

    /**
     * @return FHIRBoolean
     */
    public function getReported()
    {
        return $this->reported;
    }

    /**
     * @param FHIRBoolean $reported
     */
    public function setReported(FHIRBoolean $reported)
    {
        $this->reported = $reported;
    }
}