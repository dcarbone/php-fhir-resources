<?php namespace FHIR\Resources\Infrastructure\Query;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Extension\FHIRExtension;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRQueryResponse
 * @package FHIR\Resources\Infrastructure\Query
 */
class FHIRQueryResponse extends AbstractFHIRObject
{
    /** @var FHIRUri */
    protected $identifier = null;

    /** @var FHIRCode */
    protected $outcome = null;

    /** @var FHIRInteger */
    protected $total = null;

    /** @var FHIRExtension[]|ElementCollection */
    protected $parameter;

    /** @var FHIRExtension[]|ElementCollection */
    protected $first;

    /** @var FHIRExtension[]|ElementCollection */
    protected $previous;

    /** @var FHIRExtension[]|ElementCollection */
    protected $next;

    /** @var FHIRExtension[]|ElementCollection */
    protected $last;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $reference;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->parameter = new ElementCollection();
        $this->first = new ElementCollection();
        $this->previous = new ElementCollection();
        $this->next = new ElementCollection();
        $this->last = new ElementCollection();
        $this->reference = new ResourceCollection();
    }

    /**
     * @return FHIRUri
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRUri $identifier
     */
    public function setIdentifier(FHIRUri $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return FHIRCode
     */
    public function getOutcome()
    {
        return $this->outcome;
    }

    /**
     * @param FHIRCode $outcome
     */
    public function setOutcome(FHIRCode $outcome)
    {
        $this->outcome = $outcome;
    }

    /**
     * @return FHIRInteger
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param FHIRInteger $total
     */
    public function setTotal(FHIRInteger $total)
    {
        $this->total = $total;
    }

    /**
     * @return ElementCollection|FHIRExtension[]
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * @param FHIRExtension $parameter
     */
    public function addParameter(FHIRExtension $parameter)
    {
        $this->parameter->append($parameter);
    }

    /**
     * @return ElementCollection|FHIRExtension[]
     */
    public function getFirst()
    {
        return $this->first;
    }

    /**
     * @param FHIRExtension $first
     */
    public function addFirst(FHIRExtension $first)
    {
        $this->first->append($first);
    }

    /**
     * @return ElementCollection|FHIRExtension[]
     */
    public function getPrevious()
    {
        return $this->previous;
    }

    /**
     * @param FHIRExtension $previous
     */
    public function addPrevious(FHIRExtension$previous)
    {
        $this->previous->append($previous);
    }

    /**
     * @return ElementCollection|FHIRExtension[]
     */
    public function getNext()
    {
        return $this->next;
    }

    /**
     * @param FHIRExtension $next
     */
    public function addNext(FHIRExtension $next)
    {
        $this->next->append($next);
    }

    /**
     * @return ElementCollection|FHIRExtension[]
     */
    public function getLast()
    {
        return $this->last;
    }

    /**
     * @param FHIRExtension $last
     */
    public function addLast(FHIRExtension $last)
    {
        $this->last->append($last);
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param FHIRResourceInterface $reference
     */
    public function addReference(FHIRResourceInterface $reference)
    {
        $this->reference->append($reference);
    }
}