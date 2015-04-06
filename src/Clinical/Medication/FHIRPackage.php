<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRPackage
 * @package FHIR\Elements\Component
 */
class FHIRPackage extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $container = null;

    /** @var FHIRContent[]|ResourceComponentCollection */
    protected $content;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->content = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param FHIRCodeableConcept $container
     */
    public function setContainer(FHIRCodeableConcept $container)
    {
        $this->container = $container;
    }

    /**
     * @return ResourceComponentCollection|FHIRContent[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param FHIRContent $content
     */
    public function addContent(FHIRContent $content)
    {
        $this->content->append($content);
    }
}