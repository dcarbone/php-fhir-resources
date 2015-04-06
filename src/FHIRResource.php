<?php namespace FHIR\Resources;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ExtensionCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Extension\FHIRExtensionInterface;
use FHIR\Elements\Extension\FHIRModifierExtension;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRResource
 * @package FHIR\Resource
 */
class FHIRResource extends AbstractFHIRObject implements FHIRResourceInterface
{
    /** @var string */
    protected $_id = null;

    /** @var FHIRExtensionInterface[]|ExtensionCollection */
    protected $extension;

    /** @var FHIRModifierExtension[]|ExtensionCollection */
    protected $modifierExtension;

    /** @var FHIRCode */
    protected $language = null;

    /** @var FHIRNarrative */
    protected $text = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $contained;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->extension = new ExtensionCollection();
        $this->modifierExtension = new ExtensionCollection();
        $this->contained = new ResourceCollection();
    }

    /**
     * @param string $_id
     */
    public function _setId($_id)
    {
        $this->_id = $_id;
    }

    /**
     * @return string
     */
    public function _getId()
    {
        return $this->_id;
    }

    /**
     * @return FHIRExtensionInterface[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * @param FHIRExtensionInterface $extension
     */
    public function addExtension(FHIRExtensionInterface $extension)
    {
        $this->extension->append($extension);
    }

    /**
     * @return FHIRModifierExtension[]|\FHIR\Common\Collection\ExtensionCollection
     */
    public function getModifierExtension()
    {
        return $this->modifierExtension;
    }

    /**
     * @param FHIRModifierExtension $extension
     */
    public function addModifierExtension(FHIRModifierExtension $extension)
    {
        $this->modifierExtension->append($extension);
    }

    /**
     * @return FHIRCode
     */
    public function geLanguage()
    {
        return $this->language;
    }

    /**
     * @param FHIRCode $language
     */
    public function setLanguage(FHIRCode $language)
    {
        $this->language = $language;
    }

    /**
     * @return FHIRNarrative
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param FHIRNarrative $text
     */
    public function setText(FHIRNarrative $text)
    {
        $this->text = $text;
    }

    /**
     * @return FHIRResourceInterface[]|\FHIR\Common\Collection\ResourceCollection
     */
    public function getContained()
    {
        $this->contained;
    }

    /**
     * @param FHIRResourceInterface $resource
     */
    public function addContained(FHIRResourceInterface $resource)
    {
        $this->contained->append($resource);
    }
}