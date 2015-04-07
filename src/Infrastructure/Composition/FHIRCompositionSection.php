<?php namespace FHIR\Resources\Infrastructure\Composition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRCompositionSection
 * @package FHIR\Resources\Infrastructure\Composition
 */
class FHIRCompositionSection extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $title = null;

    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRPatient|FHIRGroup|FHIRDevice */
    protected $subject = null;

    /** @var FHIRResourceInterface */
    protected $content = null;

    /** @var FHIRCompositionSection[]|ResourceComponentCollection */
    protected $section;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->section = new ResourceComponentCollection();
    }

    /**
     * @return FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param FHIRString $title
     */
    public function setTitle(FHIRString $title)
    {
        $this->title = $title;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRDevice|FHIRGroup|FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRPatient $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRPatient)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, or FHIRPatient',
                $subject);
        }
    }

    /**
     * @return FHIRResourceInterface
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param FHIRResourceInterface $content
     */
    public function setContent(FHIRResourceInterface $content)
    {
        $this->content = $content;
    }

    /**
     * @return ResourceComponentCollection|FHIRCompositionSection[]
     */
    public function getSection()
    {
        return $this->section;
    }

    /**
     * @param FHIRCompositionSection $section
     */
    public function addSection(FHIRCompositionSection $section)
    {
        $this->section->append($section);
    }
}