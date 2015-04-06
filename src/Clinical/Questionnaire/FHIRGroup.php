<?php namespace FHIR\Resources\Clinical\Questionnaire;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\FHIRResource;

/**
 * Class FHIRGroup
 * @package FHIR\Elements\Component
 */
class FHIRGroup extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $name = null;

    /** @var FHIRString */
    protected $header = null;

    /** @var FHIRString */
    protected $text = null;

    /** @var FHIRResource */
    protected $subject = null;

    /** @var FHIRQuestion[]|ResourceComponentCollection */
    protected $question;

    /** @var FHIRGroup[]|ResourceComponentCollection */
    protected $group;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->question = new ResourceComponentCollection();
        $this->group = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRCodeableConcept $name
     */
    public function setName(FHIRCodeableConcept $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRString
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param FHIRString $header
     */
    public function setHeader(FHIRString $header)
    {
        $this->header = $header;
    }

    /**
     * @return FHIRString
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param FHIRString $text
     */
    public function setText(FHIRString $text)
    {
        $this->text = $text;
    }

    /**
     * @return FHIRResource
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRResource $subject
     */
    public function setSubject(FHIRResource $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return ResourceComponentCollection|FHIRQuestion[]
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * @param FHIRQuestion $question
     */
    public function addQuestion(FHIRQuestion $question)
    {
        $question->setGroup($this);
        $this->question->append($question);
    }

    /**
     * @return ResourceComponentCollection|FHIRGroup[]
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param FHIRGroup $group
     */
    public function addGroup(FHIRGroup $group)
    {
        $this->group->append($group);
    }
}