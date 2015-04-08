<?php namespace FHIR\Resources\Infrastructure\ValueSet;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRUri;

/**
 * Class FHIRValueSetCompose
 * @package FHIR\Resources\Infrastructure\ValueSet
 */
class FHIRValueSetCompose extends AbstractFHIRObject
{
    /** @var FHIRUri[]|ElementCollection */
    protected $import;

    /** @var FHIRValueSetComposeConceptSet[]|ResourceComponentCollection */
    protected $include;

    /** @var FHIRValueSetComposeConceptSet[]|ResourceComponentCollection */
    protected $exclude;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->import = new ElementCollection();
        $this->include = new ResourceComponentCollection();
        $this->exclude = new ResourceComponentCollection();
    }

    /**
     * @return ElementCollection|FHIRUri[]
     */
    public function getImport()
    {
        return $this->import;
    }

    /**
     * @param FHIRUri $import
     */
    public function addImport(FHIRUri $import)
    {
        $this->import->append($import);
    }

    /**
     * @return ResourceComponentCollection|FHIRValueSetComposeConceptSet[]
     */
    public function getInclude()
    {
        return $this->include;
    }

    /**
     * @param FHIRValueSetComposeConceptSet $include
     */
    public function addInclude(FHIRValueSetComposeConceptSet $include)
    {
        $this->include->append($include);
    }

    /**
     * @return ResourceComponentCollection|FHIRValueSetComposeConceptSet[]
     */
    public function getExclude()
    {
        return $this->exclude;
    }

    /**
     * @param FHIRValueSetComposeConceptSet $exclude
     */
    public function addExclude(FHIRValueSetComposeConceptSet $exclude)
    {
        $this->exclude->append($exclude);
    }
}