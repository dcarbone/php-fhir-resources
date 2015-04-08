<?php namespace FHIR\Resources\Infrastructure\ConceptMap;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConceptMapConceptOtherConcept
 * @package FHIR\Resources\Infrastructure\ConceptMap
 */
class FHIRConceptMapConceptOtherConcept extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $concept = null;

    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRCode */
    protected $code = null;

    /**
     * @return FHIRUri
     */
    public function getConcept()
    {
        return $this->concept;
    }

    /**
     * @param FHIRUri $concept
     */
    public function setConcept(FHIRUri $concept)
    {
        $this->concept = $concept;
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
}