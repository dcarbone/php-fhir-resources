<?php namespace FHIR\Resources\Clinical\Questionnaire;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRDecimal;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Infrastructure\FHIRValueSet;

/**
 * Class FHIRQuestionnaireGroupQuestion
 * @package FHIR\Resources\Clinical
 */
class FHIRQuestionnaireGroupQuestion extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $name = null;

    /** @var FHIRString */
    protected $text = null;

    /** @var FHIRDecimal|FHIRInteger|FHIRBoolean|FHIRDate|FHIRString|FHIRDateTime|FHIRInstant */
    protected $answer = null;

    /** @var FHIRCoding[]|ElementCollection */
    protected $choice;

    /** @var FHIRValueSet */
    protected $options = null;

    /** @var FHIRDate */
    protected $date = null;

    /** @var FHIRString */
    protected $remakes = null;

    /** @var FHIRQuestionnaireGroup[]|ResourceComponentCollection */
    protected $group;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->choice = new ElementCollection();
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
     * @return FHIRBoolean|FHIRDate|FHIRDateTime|FHIRDecimal|FHIRInstant|FHIRInteger|FHIRString
     */
    public function getAnswer()
    {
        return $this->answer;
    }

    /**
     * @param FHIRBoolean|FHIRDate|FHIRDateTime|FHIRDecimal|FHIRInstant|FHIRInteger|FHIRString $answer
     */
    public function setAnswer($answer)
    {
        if ($answer instanceof FHIRBoolean ||
            $answer instanceof FHIRDate ||
            $answer instanceof FHIRDateTime ||
            $answer instanceof FHIRDecimal ||
            $answer instanceof FHIRInstant ||
            $answer instanceof FHIRInteger ||
            $answer instanceof FHIRString)
        {
            $this->answer = $answer;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'answer',
                'FHIRBoolean, FHIRDate, FHIRDateTime, FHIRDecimal, FHIRInstant, FHIRInteger, or FHIRString',
                $answer);
        }
    }

    /**
     * @return ElementCollection|FHIRCoding[]
     */
    public function getChoice()
    {
        return $this->choice;
    }

    /**
     * @param FHIRCoding $choice
     */
    public function addChoice(FHIRCoding $choice)
    {
        $this->choice->append($choice);
    }

    /**
     * @return \FHIR\Resources\Infrastructure\FHIRValueSet
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * @param FHIRValueSet $options
     */
    public function setOptions(FHIRValueSet $options)
    {
        $this->options = $options;
    }

    /**
     * @return FHIRDate
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param FHIRDate $date
     */
    public function setDate(FHIRDate $date)
    {
        $this->date = $date;
    }

    /**
     * @return FHIRString
     */
    public function getRemakes()
    {
        return $this->remakes;
    }

    /**
     * @param FHIRString $remakes
     */
    public function setRemakes(FHIRString $remakes)
    {
        $this->remakes = $remakes;
    }

    /**
     * @return FHIRQuestionnaireGroup[]|ResourceComponentCollection
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param FHIRQuestionnaireGroup $group
     */
    public function addGroup(FHIRQuestionnaireGroup $group)
    {
        $this->group->append($group);
    }
}