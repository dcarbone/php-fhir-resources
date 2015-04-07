<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIROrderResponse
 * @package FHIR\Resources\Administrative
 */
class FHIROrderResponse extends AbstractFHIRIdentifiableResource
{
    /** @var FHIROrder */
    protected $request = null;

    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRPractitioner|FHIROrganization|FHIRDevice */
    protected $who = null;

    /** @var FHIRCodeableConcept|FHIRResourceInterface */
    protected $authority = null;

    /** @var FHIRCode */
    protected $code = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $fulfillment;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->fulfillment = new ResourceCollection();
    }

    /**
     * @return FHIROrder
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param FHIROrder $request
     */
    public function setRequest(FHIROrder $request)
    {
        $this->request = $request;
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
     * @return FHIRDevice|FHIROrganization|FHIRPractitioner
     */
    public function getWho()
    {
        return $this->who;
    }

    /**
     * @param FHIRDevice|FHIROrganization|FHIRPractitioner $who
     */
    public function setWho($who)
    {
        if ($who instanceof FHIRDevice ||
            $who instanceof FHIROrganization ||
            $who instanceof FHIRPractitioner)
        {
            $this->who = $who;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'who',
                'FHIRDevice, FHIROrganization, or FHIRPractitioner',
                $who);
        }
    }

    /**
     * @return FHIRCodeableConcept|FHIRResourceInterface
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * @param FHIRCodeableConcept|FHIRResourceInterface $authority
     */
    public function setAuthority($authority)
    {
        if ($authority instanceof FHIRCodeableConcept || $authority instanceof FHIRResourceInterface)
            $this->authority = $authority;
        else
            throw $this->createInvalidPropertyValueTypeException('authority', 'FHIRCodeableConcept or FHIRResourceInterface', $authority);
    }

    /**
     * @return FHIRCode
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCode $code
     */
    public function setCode(FHIRCode $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRString $description
     */
    public function setDescription(FHIRString $description)
    {
        $this->description = $description;
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getFulfillment()
    {
        return $this->fulfillment;
    }

    /**
     * @param FHIRResourceInterface $fulfillment
     */
    public function addFulfillment(FHIRResourceInterface $fulfillment)
    {
        $this->fulfillment->append($fulfillment);
    }
}