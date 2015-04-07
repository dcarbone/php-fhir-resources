<?php namespace FHIR\Resources\Infrastructure\SecurityEvent;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRBase64Binary;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIRSecurityEventObject
 * @package FHIR\Resources\Infrastructure\SecurityEvent
 */
class FHIRSecurityEventObject extends AbstractFHIRObject
{
    /** @var FHIRIdentifier */
    protected $identifier = null;

    /** @var FHIRResourceInterface */
    protected $reference = null;

    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRCode */
    protected $role = null;

    /** @var FHIRCode */
    protected $lifecycle = null;

    /** @var FHIRCodeableConcept */
    protected $sensitivity = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRBase64Binary */
    protected $query = null;

    /** @var FHIRSecurityEventDetail[]|ResourceComponentCollection */
    protected $detail;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->detail = new ResourceComponentCollection();
    }

    /**
     * @return FHIRIdentifier
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function setIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier = $identifier;
    }

    /**
     * @return FHIRResourceInterface
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * @param FHIRResourceInterface $reference
     */
    public function setReference(FHIRResourceInterface $reference)
    {
        $this->reference = $reference;
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
     * @return FHIRCode
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param FHIRCode $role
     */
    public function setRole(FHIRCode $role)
    {
        $this->role = $role;
    }

    /**
     * @return FHIRCode
     */
    public function getLifecycle()
    {
        return $this->lifecycle;
    }

    /**
     * @param FHIRCode $lifecycle
     */
    public function setLifecycle(FHIRCode $lifecycle)
    {
        $this->lifecycle = $lifecycle;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getSensitivity()
    {
        return $this->sensitivity;
    }

    /**
     * @param FHIRCodeableConcept $sensitivity
     */
    public function setSensitivity(FHIRCodeableConcept $sensitivity)
    {
        $this->sensitivity = $sensitivity;
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
     * @return FHIRBase64Binary
     */
    public function getQuery()
    {
        return $this->query;
    }

    /**
     * @param FHIRBase64Binary $query
     */
    public function setQuery(FHIRBase64Binary $query)
    {
        $this->query = $query;
    }

    /**
     * @return ResourceComponentCollection|FHIRSecurityEventDetail[]
     */
    public function getDetail()
    {
        return $this->detail;
    }

    /**
     * @param FHIRSecurityEventDetail $detail
     */
    public function addDetail(FHIRSecurityEventDetail $detail)
    {
        $this->detail->append($detail);
    }
}