<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Infrastructure\FHIRValueSet;

/**
 * Class FHIRProfileBinding
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileBinding extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRBoolean */
    protected $isExtensible = null;

    /** @var FHIRCode */
    protected $conformance = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRUri|FHIRValueSet */
    protected $reference = null;

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
     * @return FHIRBoolean
     */
    public function getIsExtensible()
    {
        return $this->isExtensible;
    }

    /**
     * @param FHIRBoolean $isExtensible
     */
    public function setIsExtensible(FHIRBoolean $isExtensible)
    {
        $this->isExtensible = $isExtensible;
    }

    /**
     * @return FHIRCode
     */
    public function getConformance()
    {
        return $this->conformance;
    }

    /**
     * @param FHIRCode $conformance
     */
    public function setConformance(FHIRCode $conformance)
    {
        $this->conformance = $conformance;
    }

    /**
     * @return FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRString $description
     */
    public function setDescription(FHIRString $description)
    {
        $this->description = $description;
    }

    /**
     * @return FHIRUri|FHIRValueSet
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param FHIRUri|FHIRValueSet $reference
     */
    public function setReference($reference)
    {
        if ($reference instanceof FHIRUri || $reference instanceof FHIRValueSet)
            $this->reference = $reference;
        else
            throw $this->createInvalidPropertyValueTypeException('reference', 'FHIRUri or FHIRValueSet', $reference);
    }
}