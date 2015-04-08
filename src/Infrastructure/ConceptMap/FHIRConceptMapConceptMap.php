<?php namespace FHIR\Resources\Infrastructure\ConceptMap;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConceptMapConceptMap
 * @package FHIR\Resources\Infrastructure\ConceptMap
 */
class FHIRConceptMapConceptMap extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $system = null;

    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRCode */
    protected $equivalence = null;

    /** @var FHIRString */
    protected $comments = null;

    /** @var FHIRConceptMapConceptOtherConcept[]|ResourceComponentCollection */
    protected $product;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->product = new ResourceComponentCollection();
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
     * @return FHIRCode
     */
    public function getEquivalence()
    {
        return $this->equivalence;
    }

    /**
     * @param FHIRCode $equivalence
     */
    public function setEquivalence(FHIRCode $equivalence)
    {
        $this->equivalence = $equivalence;
    }

    /**
     * @return FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param FHIRString $comments
     */
    public function setComments(FHIRString $comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return ResourceComponentCollection|FHIRConceptMapConceptOtherConcept[]
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param FHIRConceptMapConceptOtherConcept $product
     */
    public function addProduct(FHIRConceptMapConceptOtherConcept $product)
    {
        $this->product->append($product);
    }
}