<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRId;

/**
 * Class FHIRProfileStructureElementElementDefinitionMapping
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileStructureElementElementDefinitionMapping extends AbstractFHIRObject
{
    /** @var FHIRId */
    protected $identity = null;

    /** @var FHIRString */
    protected $map = null;

    /**
     * @return FHIRId
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param FHIRId $identity
     */
    public function setIdentity(FHIRId $identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return FHIRString
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param FHIRString $map
     */
    public function setMap(FHIRString $map)
    {
        $this->map = $map;
    }
}