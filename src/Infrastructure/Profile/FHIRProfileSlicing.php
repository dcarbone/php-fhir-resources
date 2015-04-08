<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Elements\Simple\FHIRId;

/**
 * Class FHIRProfileSlicing
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileSlicing extends AbstractFHIRObject
{
    /** @var FHIRId */
    protected $discriminator = null;

    /** @var FHIRBoolean */
    protected $ordered = null;

    /** @var FHIRCode */
    protected $rules = null;

    /**
     * @return FHIRId
     */
    public function getDiscriminator()
    {
        return $this->discriminator;
    }

    /**
     * @param FHIRId $discriminator
     */
    public function setDiscriminator(FHIRId $discriminator)
    {
        $this->discriminator = $discriminator;
    }

    /**
     * @return FHIRBoolean
     */
    public function getOrdered()
    {
        return $this->ordered;
    }

    /**
     * @param FHIRBoolean $ordered
     */
    public function setOrdered(FHIRBoolean $ordered)
    {
        $this->ordered = $ordered;
    }

    /**
     * @return FHIRCode
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param FHIRCode $rules
     */
    public function setRules(FHIRCode $rules)
    {
        $this->rules = $rules;
    }
}