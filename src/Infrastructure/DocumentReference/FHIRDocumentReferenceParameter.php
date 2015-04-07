<?php namespace FHIR\Resources\Infrastructure\DocumentReference;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRDocumentReferenceParameter
 * @package FHIR\Resources\Infrastructure\DocumentReference
 */
class FHIRDocumentReferenceParameter extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $value = null;

    /**
     * @return FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRString $name
     */
    public function setName(FHIRString $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param FHIRString $value
     */
    public function setValue(FHIRString $value)
    {
        $this->value = $value;
    }
}