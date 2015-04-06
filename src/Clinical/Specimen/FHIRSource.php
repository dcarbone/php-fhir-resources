<?php namespace FHIR\Resources\Clinical\Specimen;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Clinical\FHIRSpecimen;

/**
 * Class FHIRSource
 * @package FHIR\Resources\Clinical\Specimen
 */
class FHIRSource extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $relationship = null;

    /** @var FHIRSpecimen[]|ResourceCollection */
    protected $target;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->target = new ResourceCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param FHIRCode $relationship
     */
    public function setRelationship(FHIRCode $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @return ResourceCollection|FHIRSpecimen[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRSpecimen $target
     */
    public function addTarget(FHIRSpecimen $target)
    {
        $this->target->append($target);
    }
}