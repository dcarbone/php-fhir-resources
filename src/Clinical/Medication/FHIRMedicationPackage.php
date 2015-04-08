<?php namespace FHIR\Resources\Clinical\Medication;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;

/**
 * Class FHIRMedicationPackage
 * @package FHIR\Resources\Clinical\Medication
 */
class FHIRMedicationPackage extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $container = null;

    /** @var FHIRMedicationPackageContent[]|ResourceComponentCollection */
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
     * @return ResourceComponentCollection|FHIRMedicationPackageContent[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param FHIRMedicationPackageContent $content
     */
    public function addContent(FHIRMedicationPackageContent $content)
    {
        $this->content->append($content);
    }
}