<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIRConformanceRest
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceRest extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $mode = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRUri[]|ElementCollection */
    protected $documentMailbox;

    /** @var FHIRConformanceRestOperation[]|ResourceComponentCollection */
    protected $operation;

    /** @var FHIRConformanceRestResource[]|ResourceComponentCollection */
    protected $resource;

    /** @var FHIRConformanceRestSecurity */
    protected $security = null;

    /** @var FHIRConformanceQuery[]|ResourceComponentCollection */
    protected $query;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->documentMailbox = new ElementCollection();
        $this->operation = new ResourceComponentCollection();
        $this->resource = new ResourceComponentCollection();
        $this->query = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param FHIRCode $mode
     */
    public function setMode(FHIRCode $mode)
    {
        $this->mode = $mode;
    }

    /**
     * @return FHIRString
     */
    public function getDocumentation()
    {
        return $this->documentation;
    }

    /**
     * @param FHIRString $documentation
     */
    public function setDocumentation(FHIRString $documentation)
    {
        $this->documentation = $documentation;
    }

    /**
     * @return ElementCollection|FHIRUri[]
     */
    public function getDocumentMailbox()
    {
        return $this->documentMailbox;
    }

    /**
     * @param FHIRUri $documentMailbox
     */
    public function addDocumentMailbox(FHIRUri $documentMailbox)
    {
        $this->documentMailbox->append($documentMailbox);
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceRestOperation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param FHIRConformanceRestOperation $operation
     */
    public function addOperation(FHIRConformanceRestOperation $operation)
    {
        $this->operation->append($operation);
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceRestResource[]
     */
    public function getResource()
    {
        return $this->resource;
    }

    /**
     * @param FHIRConformanceRestResource $resource
     */
    public function addResource(FHIRConformanceRestResource $resource)
    {
        $this->resource->append($resource);
    }

    /**
     * @return FHIRConformanceRestSecurity
     */
    public function getSecurity()
    {
        return $this->security;
    }

    /**
     * @param FHIRConformanceRestSecurity $security
     */
    public function setSecurity(FHIRConformanceRestSecurity $security)
    {
        $this->security = $security;
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceQuery[]
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param FHIRConformanceQuery $query
     */
    public function addQuery(FHIRConformanceQuery $query)
    {
        $this->query->append($query);
    }
}