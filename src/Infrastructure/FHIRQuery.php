<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Extension\FHIRExtension;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Infrastructure\Query\FHIRQueryResponse;

/**
 * Class FHIRQuery
 * @package FHIR\Resources\Infrastructure
 */
class FHIRQuery extends FHIRResource
{
    /** @var FHIRUri */
    protected $identifier = null;

    /** @var FHIRExtension[]|ElementCollection */
    protected $parameter;

    /** @var FHIRQueryResponse */
    protected $response = null;

    /**
     * Constructor
     */
    public function  __construct()
    {
        parent::__construct();
        $this->parameter = new ElementCollection();
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
     * @return FHIRQueryResponse
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param FHIRQueryResponse $response
     */
    public function setResponse(FHIRQueryResponse $response)
    {
        $this->response = $response;
    }
}