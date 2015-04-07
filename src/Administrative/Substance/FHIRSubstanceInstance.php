<?php namespace FHIR\Resources\Administrative\Substance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Primitive\FHIRDateTime;

/**
 * Class FHIRSubstanceInstance
 * @package FHIR\Resources\Administrative\Substance
 */
class FHIRSubstanceInstance extends AbstractFHIRObject
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRDateTime */
    protected $expiry = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /**
     * @return FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function setIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return FHIRDateTime
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * @param FHIRDateTime $expiry
     */
    public function setExpiry(FHIRDateTime $expiry)
    {
        $this->expiry = $expiry;
    }

    /**
     * @return FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRQuantity $quantity
     */
    public function setQuantity(FHIRQuantity $quantity)
    {
        $this->quantity = $quantity;
    }
}