<?php namespace FHIR\Resources\Administrative\Substance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRRatio;
use FHIR\Resources\Administrative\FHIRSubstance;

/**
 * Class FHIRSubstanceIngredient
 * @package FHIR\Resources\Administrative\Substance
 */
class FHIRSubstanceIngredient extends AbstractFHIRObject
{
    /** @var FHIRRatio */
    protected $quantity = null;

    /** @var FHIRSubstance */
    protected $substance = null;

    /**
     * @return FHIRRatio
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRRatio $quantity
     */
    public function setQuantity(FHIRRatio $quantity)
    {
        $this->quantity = $quantity;
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