<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRProfileStructureElementElementDefinitionTypeRef
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileStructureElementElementDefinitionTypeRef extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRUri */
    protected $profile = null;

    /** @var FHIRCode[]|ElementCollection */
    protected $aggregation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->aggregation = new ElementCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function setCode(FHIRCode $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRUri
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param FHIRUri $profile
     */
    public function setProfile(FHIRUri $profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return ElementCollection|FHIRCode[]
     */
    public function getAggregation()
    {
        return $this->aggregation;
    }

    /**
     * @param FHIRCode $aggregation
     */
    public function addAggregation(FHIRCode $aggregation)
    {
        $this->aggregation->append($aggregation);
    }
}