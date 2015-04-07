<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Order\FHIROrderWhen;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIROrder
 * @package FHIR\Resources\Administrative
 */
class FHIROrder extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRDateTime */
    protected $date = null;

    /** @var FHIRPatient */
    protected $subject = null;

    /** @var FHIRPractitioner */
    protected $source = null;

    /** @var FHIRPractitioner|FHIRDevice|FHIROrganization */
    protected $target = null;

    /** @var FHIRCodeableConcept|FHIRResourceInterface */
    protected $reason = null;

    /** @var FHIRResourceInterface */
    protected $authority = null;

    /** @var FHIRResourceInterface[]|ResourceCollection */
    protected $detail;

    /** @var FHIROrderWhen */
    protected $when = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->detail = new ResourceCollection();
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
     * @return FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRPatient $subject
     */
    public function setSubject(FHIRPatient $subject)
    {
        $this->subject = $subject;
    }

    /**
     * @return FHIRPractitioner
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRPractitioner $source
     */
    public function setSource(FHIRPractitioner $source)
    {
        $this->source = $source;
    }

    /**
     * @return FHIRDevice|FHIROrganization|FHIRPractitioner
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * @param FHIRDevice|FHIROrganization|FHIRPractitioner $target
     */
    public function setTarget($target)
    {
        if ($target instanceof FHIRDevice ||
            $target instanceof FHIROrganization ||
            $target instanceof FHIRPractitioner)
        {
            $this->target = $target;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'target',
                'FHIRDevice, FHIROrganization, or FHIRPRactitioner',
                $target);
        }
    }

    /**
     * @return FHIRCodeableConcept|FHIRResourceInterface
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param FHIRCodeableConcept|FHIRResourceInterface $reason
     */
    public function setReason($reason)
    {
        if ($reason instanceof FHIRCodeableConcept || $reason instanceof FHIRResourceInterface)
            $this->reason = $reason;
        else
            throw $this->createInvalidPropertyValueTypeException('reason', 'FHIRCodeableConcept or FHIRResourceInterface', $reason);
    }

    /**
     * @return FHIRResourceInterface
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * @param FHIRResourceInterface $authority
     */
    public function setAuthority(FHIRResourceInterface $authority)
    {
        $this->authority = $authority;
    }

    /**
     * @return ResourceCollection|FHIRResourceInterface[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param FHIRResourceInterface $detail
     */
    public function addDetail(FHIRResourceInterface $detail)
    {
        $this->detail->append($detail);
    }

    /**
     * @return FHIROrderWhen
     */
    public function getWhen()
    {
        return $this->when;
    }

    /**
     * @param FHIROrderWhen $when
     */
    public function setWhen(FHIROrderWhen $when)
    {
        $this->when = $when;
    }
}