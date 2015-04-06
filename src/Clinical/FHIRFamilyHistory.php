<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Clinical\FamilyHistory\FHIRRelation;

/**
 * Class FHIRFamilyHistory
 * @package FHIR\Resources\Clinical
 */
class FHIRFamilyHistory extends AbstractFHIRIdentifiableResource
{
    /** @var \FHIR\Resources\Administrative\FHIRPatient */
    protected $subject = null;

    /** @var FHIRString */
    protected $note = null;

    /** @var \FHIR\Resources\Clinical\FamilyHistory\FHIRRelation[]|ResourceComponentCollection */
    protected $relation;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->relation = new ResourceComponentCollection();
    }

    /**
     * @return FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
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

    /**
     * @return ResourceComponentCollection|\FHIR\Resources\Clinical\FamilyHistory\FHIRRelation[]
     */
    public function getRelation()
    {
        return $this->relation;
    }

    /**
     * @param FHIRRelation $relation
     */
    public function addRelation(FHIRRelation $relation)
    {
        $this->relation->append($relation);
    }
}