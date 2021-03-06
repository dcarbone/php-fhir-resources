<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Infrastructure\FHIRProfile;

/**
 * Class FHIRConformanceRestResource
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceRestResource extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRProfile */
    protected $profile = null;

    /** @var FHIRBoolean */
    protected $readHistory = null;

    /** @var FHIRBoolean */
    protected $updateCreate = null;

    /** @var FHIRString[]|ElementCollection */
    protected $searchInclude;

    /** @var FHIRConformanceRestResourceOperation[]|ResourceComponentCollection */
    protected $operation;

    /** @var FHIRConformanceRestQuerySearchParam[]|ResourceComponentCollection */
    protected $searchParam;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->searchInclude = new ElementCollection();
        $this->operation = new ResourceComponentCollection();
        $this->searchParam = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCode $type
     */
    public function setType(FHIRCode $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRProfile
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param FHIRProfile $profile
     */
    public function setProfile(FHIRProfile $profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return FHIRBoolean
     */
    public function getReadHistory()
    {
        return $this->readHistory;
    }

    /**
     * @param FHIRBoolean $readHistory
     */
    public function setReadHistory(FHIRBoolean $readHistory)
    {
        $this->readHistory = $readHistory;
    }

    /**
     * @return FHIRBoolean
     */
    public function getUpdateCreate()
    {
        return $this->updateCreate;
    }

    /**
     * @param FHIRBoolean $updateCreate
     */
    public function setUpdateCreate(FHIRBoolean $updateCreate)
    {
        $this->updateCreate = $updateCreate;
    }

    /**
     * @return ElementCollection|FHIRString[]
     */
    public function getSearchInclude()
    {
        return $this->searchInclude;
    }

    /**
     * @param FHIRString $searchInclude
     */
    public function addSearchInclude(FHIRString $searchInclude)
    {
        $this->searchInclude->append($searchInclude);
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceRestResourceOperation[]
     */
    public function getOperation()
    {
        return $this->operation;
    }

    /**
     * @param FHIRConformanceRestResourceOperation $operation
     */
    public function addOperation(FHIRConformanceRestResourceOperation $operation)
    {
        $this->operation->append($operation);
    }

    /**
     * @return ResourceComponentCollection|FHIRConformanceRestQuerySearchParam[]
     */
    public function getSearchParam()
    {
        return $this->searchParam;
    }

    /**
     * @param FHIRConformanceRestQuerySearchParam $searchParam
     */
    public function addSearchParam(FHIRConformanceRestQuerySearchParam $searchParam)
    {
        $this->searchParam->append($searchParam);
    }
}