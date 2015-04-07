<?php namespace FHIR\Resources\Infrastructure\FHIRList;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRListEntry
 * @package FHIR\Resources\Infrastructure\FHIRList
 */
class FHIRListEntry extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $flag;

    /** @var FHIRBoolean */
    protected $deleted = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRResourceInterface */
    protected $item = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->flag = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getFlag()
    {
        return $this->flag;
    }

    /**
     * @param FHIRCodeableConcept $flag
     */
    public function addFlag(FHIRCodeableConcept $flag)
    {
        $this->flag->append($flag);
    }

    /**
     * @return FHIRBoolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @param FHIRBoolean $deleted
     */
    public function setDeleted(FHIRBoolean $deleted)
    {
        $this->deleted = $deleted;
    }

    /**
     * @return FHIRDateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param FHIRDateTime $date
     */
    public function setDate(FHIRDateTime $date)
    {
        $this->date = $date;
    }

    /**
     * @return FHIRResourceInterface
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * @param FHIRResourceInterface $item
     */
    public function setItem(FHIRResourceInterface $item)
    {
        $this->item = $item;
    }
}