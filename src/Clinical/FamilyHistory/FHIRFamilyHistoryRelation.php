<?php namespace FHIR\Resources\Clinical\FamilyHistory;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRRange;
use FHIR\Elements\Complex\Quantity\FHIRAge;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRDate;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRFamilyHistoryRelation
 * @package FHIR\Resources\Clinical
 */
class FHIRFamilyHistoryRelation extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRCodeableConcept */
    protected $relationship = null;

    /** @var FHIRPeriod|FHIRDate|FHIRString */
    protected $born = null;

    /** @var FHIRBoolean|\FHIR\Elements\Complex\Quantity\FHIRAge|FHIRRange|FHIRDate|FHIRString */
    protected $deceased = null;

    /** @var FHIRString */
    protected $note = null;

    /** @var FHIRFamilyHistoryCondition[]|ResourceComponentCollection */
    protected $condition = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->condition = new ResourceComponentCollection();
    }

    /**
     * @return FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRString $name
     */
    public function setName(FHIRString $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getRelationship()
    {
        return $this->relationship;
    }

    /**
     * @param FHIRCodeableConcept $relationship
     */
    public function setRelationship(FHIRCodeableConcept $relationship)
    {
        $this->relationship = $relationship;
    }

    /**
     * @return FHIRDate|FHIRPeriod|FHIRString
     */
    public function getBorn()
    {
        return $this->born;
    }

    /**
     * @param FHIRDate|FHIRPeriod|FHIRString $born
     */
    public function setBorn($born)
    {
        if ($born instanceof FHIRDate ||
            $born instanceof FHIRPeriod ||
            $born instanceof FHIRString)
        {
            $this->born = $born;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException('born', 'FHIRDate, FHIRPeriod, or FHIRString', $born);
        }
    }

    /**
     * @return \FHIR\Elements\Complex\Quantity\FHIRAge|FHIRBoolean|FHIRDate|FHIRRange|FHIRString
     */
    public function getDeceased()
    {
        return $this->deceased;
    }

    /**
     * @param \FHIR\Elements\Complex\Quantity\FHIRAge|FHIRBoolean|FHIRDate|FHIRRange|FHIRString $deceased
     */
    public function setDeceased($deceased)
    {
        if ($deceased instanceof FHIRAge ||
            $deceased instanceof FHIRBoolean ||
            $deceased instanceof FHIRDate ||
            $deceased instanceof FHIRRange ||
            $deceased instanceof FHIRString)
        {
            $this->deceased = $deceased;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'deceased',
                'FHIRAge, FHIRBoolean, FHIRDate, FHIRRange, or FHIRString',
                $deceased);
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

    /**
     * @return FHIRFamilyHistoryCondition[]|ResourceComponentCollection
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param FHIRFamilyHistoryCondition $condition
     */
    public function addCondition(FHIRFamilyHistoryCondition $condition)
    {
        $this->condition->append($condition);
    }
}