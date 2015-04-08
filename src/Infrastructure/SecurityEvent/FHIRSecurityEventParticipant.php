<?php namespace FHIR\Resources\Infrastructure\SecurityEvent;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;

/**
 * Class FHIRSecurityEventParticipant
 * @package FHIR\Resources\Infrastructure\SecurityEvent
 */
class FHIRSecurityEventParticipant extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $role;

    /** @var FHIRPractitioner|FHIRPatient|FHIRDevice */
    protected $reference = null;

    /** @var FHIRString */
    protected $userId = null;

    /** @var FHIRString */
    protected $altId = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRBoolean */
    protected $requestor = null;

    /** @var FHIRCoding */
    protected $media = null;

    /** @var FHIRSecurityEventParticipantNetwork */
    protected $network = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->role = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param FHIRCodeableConcept $role
     */
    public function addRole(FHIRCodeableConcept $role)
    {
        $this->role->append($role);
    }

    /**
     * @return FHIRDevice|FHIRPatient|FHIRPractitioner
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param FHIRDevice|FHIRPatient|FHIRPractitioner $reference
     */
    public function setReference($reference)
    {
        if ($reference instanceof FHIRDevice ||
            $reference instanceof FHIRPatient ||
            $reference instanceof FHIRPractitioner)
        {
            $this->reference = $reference;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'reference',
                'FHIRDevice, FHIRPatient, or FHIRPractitioner',
                $reference);
        }
    }

    /**
     * @return FHIRString
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param FHIRString $userId
     */
    public function setUserId(FHIRString $userId)
    {
        $this->userId = $userId;
    }

    /**
     * @return FHIRString
     */
    public function getAltId()
    {
        return $this->altId;
    }

    /**
     * @param FHIRString $altId
     */
    public function setAltId(FHIRString $altId)
    {
        $this->altId = $altId;
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
     * @return FHIRBoolean
     */
    public function getRequestor()
    {
        return $this->requestor;
    }

    /**
     * @param FHIRBoolean $requestor
     */
    public function setRequestor(FHIRBoolean $requestor)
    {
        $this->requestor = $requestor;
    }

    /**
     * @return FHIRCoding
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * @param FHIRCoding $media
     */
    public function setMedia(FHIRCoding $media)
    {
        $this->media = $media;
    }

    /**
     * @return FHIRSecurityEventParticipantNetwork
     */
    public function getNetwork()
    {
        return $this->network;
    }

    /**
     * @param FHIRSecurityEventParticipantNetwork $network
     */
    public function setNetwork(FHIRSecurityEventParticipantNetwork $network)
    {
        $this->network = $network;
    }
}