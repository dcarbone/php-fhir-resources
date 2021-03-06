<?php namespace FHIR\Resources;

use FHIR\Elements\Extension\FHIRExtensionInterface;
use FHIR\Elements\Extension\FHIRModifierExtension;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Common\FHIRObjectInterface;

/**
 * Interface FHIRResourceInterface
 * @package FHIR\Resource
 */
interface FHIRResourceInterface extends FHIRObjectInterface
{
    /**
     * @return string
     */
    public function getId();

    /**
     * @param string $id
     */
    public function setId($id);

    /**
     * @return FHIRExtensionInterface[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getExtension();

    /**
     * @param FHIRExtensionInterface $extension
     */
    public function addExtension(FHIRExtensionInterface $extension);

    /**
     * @return FHIRModifierExtension[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getModifierExtension();

    /**
     * @param FHIRModifierExtension $extension
     */
    public function addModifierExtension(FHIRModifierExtension $extension);

    /**
     * @return FHIRCode
     */
    public function getLanguage();

    /**
     * @param FHIRCode $language
     */
    public function setLanguage(FHIRCode $language);

    /**
     * @return FHIRNarrative
     */
    public function getText();

    /**
     * @param FHIRNarrative $text
     */
    public function setText(FHIRNarrative $text);

    /**
     * @return FHIRResourceInterface[]|\FHIR\Common\Collection\ResourceCollection
     */
    public function getContained();

    /**
     * @param FHIRResourceInterface $resource
     */
    public function addContained(FHIRResourceInterface $resource);
}
