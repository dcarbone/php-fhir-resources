<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIROther
 * @package FHIR\Resources\Infrastructure
 */
class FHIROther extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRResourceInterface */
    protected $subject = null;

    /** @var FHIRPractitioner|FHIRPatient|FHIRRelatedPerson */
    protected $author = null;

    /** @var FHIRDate */
    protected $created = null;

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
     * @return FHIRResourceInterface
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRResourceInterface $subject
     */
    public function setSubject(FHIRResourceInterface $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return FHIRPatient|FHIRPractitioner|FHIRRelatedPerson
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param FHIRPatient|FHIRPractitioner|FHIRRelatedPerson $author
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
     * @return FHIRDate
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param FHIRDate $created
     */
    public function setCreated(FHIRDate $created)
    {
        $this->created = $created;
    }
}