<?php namespace FHIR\Resources\Infrastructure\DocumentReference;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRDocumentReferenceService
 * @package FHIR\Resources\Infrastructure\DocumentReference
 */
class FHIRDocumentReferenceService extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRString */
    protected $address = null;

    /** @var FHIRDocumentReferenceParameter[]|ResourceComponentCollection */
    protected $parameter;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parameter = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCodeableConcept $type
     */
    public function setType(FHIRCodeableConcept $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRString
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param FHIRString $address
     */
    public function setAddress(FHIRString $address)
    {
        $this->address = $address;
    }

    /**
     * @return ResourceComponentCollection|FHIRDocumentReferenceParameter[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param FHIRDocumentReferenceParameter $parameter
     */
    public function addParameter(FHIRDocumentReferenceParameter $parameter)
    {
        $this->parameter->append($parameter);
    }
}