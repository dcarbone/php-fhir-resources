<?php namespace FHIR\Resources\Administrative;

use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;

/**
 * Class FHIRAlert
 * @package FHIR\Resources\Administrative
 */
class FHIRAlert extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $category = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRPatient */
    protected $subject= null;

    /** @var FHIRPatient|FHIRPractitioner|FHIRDevice */
    protected $author = null;

    /** @var FHIRString */
    protected $note = null;

    /**
     * @return FHIRCodeableConcept
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param FHIRCodeableConcept $category
     */
    public function setCategory(FHIRCodeableConcept $category)
    {
        $this->category = $category;
    }

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
     * @return FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return FHIRDevice|FHIRPatient|FHIRPractitioner
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param FHIRDevice|FHIRPatient|FHIRPractitioner $author
     */
    public function setAuthor($author)
    {
        if ($author instanceof FHIRDevice ||
            $author instanceof FHIRPatient ||
            $author instanceof FHIRPractitioner)
        {
            $this->author = $author;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'author',
                'FHIRDevice, FHIRPatient, or FHIRPractitioner',
                $author);
        }
    }

    /**
     * @return FHIRString
     */
    public function getNote()
    {
        return $this->note;
    }

    /**
     * @param FHIRString $note
     */
    public function setNote(FHIRString $note)
    {
        $this->note = $note;
    }
}