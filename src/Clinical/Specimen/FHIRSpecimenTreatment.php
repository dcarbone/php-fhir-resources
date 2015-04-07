<?php namespace FHIR\Resources\Clinical\Specimen;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIRSubstance;

/**
 * Class FHIRSpecimenTreatment
 * @package FHIR\Resources\Clinical\Specimen
 */
class FHIRSpecimenTreatment extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCodeableConcept */
    protected $procedure = null;

    /** @var FHIRSubstance[]|ResourceCollection */
    protected $additive;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->additive = new ResourceCollection();
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
     * @return FHIRCodeableConcept
     */
    public function getProcedure()
    {
        return $this->procedure;
    }

    /**
     * @param FHIRCodeableConcept $procedure
     */
    public function setProcedure(FHIRCodeableConcept $procedure)
    {
        $this->procedure = $procedure;
    }

    /**
     * @return ResourceCollection|FHIRSubstance[]
     */
    public function getAdditive()
    {
        return $this->additive;
    }

    /**
     * @param FHIRSubstance $additive
     */
    public function addAdditive(FHIRSubstance $additive)
    {
        $this->additive = $additive;
    }
}