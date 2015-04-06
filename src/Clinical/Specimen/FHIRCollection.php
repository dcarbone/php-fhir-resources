<?php namespace FHIR\Resources\Clinical\Specimen;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIRPractitioner;

/**
 * Class FHIRCollection
 * @package FHIR\Resources\Clinical\Specimen
 */
class FHIRCollection extends AbstractFHIRObject
{
    /** @var FHIRPractitioner */
    protected $collector = null;

    /** @var FHIRString[]|ElementCollection */
    protected $comment;

    /** @var FHIRDateTime|FHIRPeriod */
    protected $collected = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /** @var FHIRCodeableConcept */
    protected $method = null;

    /** @var FHIRCodeableConcept */
    protected $sourceSite =  null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->comment = new ElementCollection();
    }

    /**
     * @return FHIRPractitioner
     */
    public function getCollector()
    {
        return $this->collector;
    }

    /**
     * @param FHIRPractitioner $collector
     */
    public function setCollector(FHIRPractitioner $collector)
    {
        $this->collector = $collector;
    }

    /**
     * @return ElementCollection|FHIRString[]
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param FHIRString $comment
     */
    public function addComment(FHIRString $comment)
    {
        $this->comment->append($comment);
    }

    /**
     * @return FHIRDateTime|FHIRPeriod
     */
    public function getCollected()
    {
        return $this->collected;
    }

    /**
     * @param FHIRDateTime|FHIRPeriod $collected
     */
    public function setCollected($collected)
    {
        if ($collected instanceof FHIRDateTime || $collected instanceof FHIRPeriod)
            $this->collected = $collected;
        else
            throw $this->createInvalidPropertyValueTypeException('collected', 'FHIRDateTime or FHIRPeriod', $collected);
    }

    /**
     * @return FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRQuantity $quantity
     */
    public function setQuantity(FHIRQuantity $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param FHIRCodeableConcept $method
     */
    public function setMethod(FHIRCodeableConcept $method)
    {
        $this->method = $method;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSourceSite()
    {
        return $this->sourceSite;
    }

    /**
     * @param FHIRCodeableConcept $sourceSite
     */
    public function setSourceSite(FHIRCodeableConcept $sourceSite)
    {
        $this->sourceSite = $sourceSite;
    }
}