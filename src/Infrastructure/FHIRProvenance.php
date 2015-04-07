<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\FHIRResourceInterface;
use FHIR\Resources\Infrastructure\Provenance\FHIRProvenanceAgent;
use FHIR\Resources\Infrastructure\Provenance\FHIRProvenanceEntity;

/**
 * Class FHIRProvenance
 * @package FHIR\Resources\Infrastructure
 */
class FHIRProvenance extends FHIRResource
{
    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $target;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRInstant */
    protected $recorded = null;

    /** @var FHIRCodeableConcept */
    protected $reason = null;

    /** @var FHIRLocation */
    protected $location = null;

    /** @var FHIRUri[]|ElementCollection */
    protected $policy;

    /** @var FHIRString */
    protected $integritySignature = null;

    /** @var FHIRProvenanceAgent[]|ResourceComponentCollection */
    protected $agent;

    /** @var FHIRProvenanceEntity[]|ResourceComponentCollection */
    protected $entity;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->target = new ResourceCollection();
        $this->policy = new ElementCollection();
        $this->agent = new ResourceComponentCollection();
        $this->entity = new ResourceComponentCollection();
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRResourceInterface $target
     */
    public function addTarget(FHIRResourceInterface $target)
    {
        $this->target->append($target);
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }

    /**
     * @return FHIRInstant
     */
    public function getRecorded()
    {
        return $this->recorded;
    }

    /**
     * @param FHIRInstant $recorded
     */
    public function setRecorded(FHIRInstant $recorded)
    {
        $this->recorded = $recorded;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept $reason
     */
    public function setReason(FHIRCodeableConcept $reason)
    {
        $this->reason = $reason;
    }

    /**
     * @return FHIRLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRLocation $location
     */
    public function setLocation(FHIRLocation $location)
    {
        $this->location = $location;
    }

    /**
     * @return ElementCollection|FHIRUri[]
     */
    public function getPolicy()
    {
        return $this->policy;
    }

    /**
     * @param FHIRUri $policy
     */
    public function addPolicy(FHIRUri $policy)
    {
        $this->policy->append($policy);
    }

    /**
     * @return FHIRString
     */
    public function getIntegritySignature()
    {
        return $this->integritySignature;
    }

    /**
     * @param FHIRString $integritySignature
     */
    public function setIntegritySignature(FHIRString $integritySignature)
    {
        $this->integritySignature = $integritySignature;
    }

    /**
     * @return ResourceComponentCollection|FHIRProvenanceAgent[]
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @return ResourceComponentCollection|FHIRProvenanceEntity[]
     */
    public function getEntity()
    {
        return $this->entity;
    }

    /**
     * @param FHIRProvenanceEntity $entity
     * @param FHIRProvenanceAgent $agent
     */
    public function addEntityAndAgent(FHIRProvenanceEntity $entity, FHIRProvenanceAgent $agent)
    {
        $entity->setAgent($agent);
        $this->entity->append($entity);
    }
}