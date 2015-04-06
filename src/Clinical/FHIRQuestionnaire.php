<?php namespace FHIR\Resources\Clinical;

use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;
use FHIR\Resources\Clinical\Questionnaire\FHIRGroup;
use FHIR\Resources\Administrative\FHIREncounter;

/**
 * Class FHIRQuestionnaire
 * @package FHIR\Resources\Clinical
 */
class FHIRQuestionnaire extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRDateTime */
    protected $authored = null;

    /** @var \FHIR\Resources\Administrative\FHIRPatient|FHIRRelatedPerson */
    protected $subject = null;

    /** @var \FHIR\Resources\Administrative\FHIRPatient|FHIRPractitioner|\FHIR\Resources\Administrative\FHIRRelatedPerson */
    protected $author = null;

    /** @var FHIRCodeableConcept */
    protected $name = null;

    /** @var \FHIR\Resources\Administrative\FHIREncounter */
    protected $encounter = null;

    /** @var FHIRGroup */
    protected $group = null;

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $status
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
    }

    /**
     * @return FHIRDateTime
     */
    public function getAuthored()
    {
        return $this->authored;
    }

    /**
     * @param FHIRDateTime $authored
     */
    public function setAuthored(FHIRDateTime $authored)
    {
        $this->authored = $authored;
    }

    /**
     * @return FHIRPatient|\FHIR\Resources\Administrative\FHIRRelatedPerson
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPatient|\FHIR\Resources\Administrative\FHIRRelatedPerson $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRPatient || $subject instanceof FHIRRelatedPerson)
            $this->subject = $subject;
        else
            throw $this->createInvalidPropertyValueTypeException('subject', 'FHIRPatient or FHIRRelatedPerson', $subject);
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIRPatient|FHIRPractitioner|\FHIR\Resources\Administrative\FHIRRelatedPerson
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPatient|FHIRPractitioner|\FHIR\Resources\Administrative\FHIRRelatedPerson $author
     */
    public function setAuthor($author)
    {
        if ($author instanceof FHIRPatient ||
            $author instanceof FHIRPractitioner ||
            $author instanceof FHIRRelatedPerson)
        {
            $this->author = $author;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'author',
                'FHIRPatient, FHIRPractitioner, or FHIRRelatedPerson',
                $author);
        }
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
     * @return \FHIR\Resources\Administrative\FHIREncounter
     */
    public function getEncounter()
    {
        return $this->encounter;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIREncounter $encounter
     */
    public function setEncounter(FHIREncounter $encounter)
    {
        $this->encounter = $encounter;
    }

    /**
     * @return FHIRGroup
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param FHIRGroup $group
     */
    public function setGroup(FHIRGroup $group)
    {
        $this->group = $group;
    }
}