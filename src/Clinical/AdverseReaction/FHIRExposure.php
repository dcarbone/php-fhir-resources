<?php namespace FHIR\Resources\Clinical\AdverseReaction;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRSubstance;

/**
 * Class FHIRExposure
 * @package FHIR\Elements\Component\AdverseReaction
 */
class FHIRExposure extends AbstractFHIRObject
{
    // TODO Implement http://www.hl7.org/implement/standards/fhir/exposureType.html
    // TODO Implement http://www.hl7.org/implement/standards/fhir/causalityExpectation.html

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRCode */
    protected $causalityExpectation = null;

    /** @var FHIRSubstance */
    protected $substance = null;

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
     * @return FHIRCode
     */
    public function getCausalityExpectation()
    {
        return $this->causalityExpectation;
    }

    /**
     * @param FHIRCode $causalityExpectation
     */
    public function setCausalityExpectation(FHIRCode $causalityExpectation)
    {
        $this->causalityExpectation = $causalityExpectation;
    }

    /**
     * @return FHIRSubstance
     */
    public function getSubstance()
    {
        return $this->substance;
    }

    /**
     * @param FHIRSubstance $substance
     */
    public function setSubstance(FHIRSubstance $substance)
    {
        $this->substance = $substance;
    }
}