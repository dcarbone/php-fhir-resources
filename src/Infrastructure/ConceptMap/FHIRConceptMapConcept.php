<?php namespace FHIR\Resources\Infrastructure\ConceptMap;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConceptMapConcept
 * @package FHIR\Resources\Infrastructure\ConceptMap
 */
class FHIRConceptMapConcept extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRConceptMapConceptMap[]|ResourceComponentCollection */
    protected $map;

    /** @var FHIRConceptMapConceptOtherConcept[]|ResourceComponentCollection */
    protected $dependsOn;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->map = new ResourceComponentCollection();
        $this->dependsOn = new ResourceComponentCollection();
    }

    /**
     * @return FHIRUri
     */
    public function getSystem()
    {
        return $this->system;
    }

    /**
     * @param FHIRUri $system
     */
    public function setSystem(FHIRUri $system)
    {
        $this->system = $system;
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
     * @return ResourceComponentCollection|FHIRConceptMapConceptMap[]
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @return ResourceComponentCollection|FHIRConceptMapConceptOtherConcept[]
     */
    public function getDependsOn()
    {
        return $this->dependsOn;
    }

    /**
     * @param FHIRConceptMapConceptMap $map
     * @param FHIRConceptMapConceptOtherConcept $dependsOn
     */
    public function addMapAndDependsOn(FHIRConceptMapConceptMap $map, FHIRConceptMapConceptOtherConcept $dependsOn)
    {
        $map->addProduct($dependsOn);
        $this->dependsOn->append($dependsOn);
        $this->map->append($map);
    }
}