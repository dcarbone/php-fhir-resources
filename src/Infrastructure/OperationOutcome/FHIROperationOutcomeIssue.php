<?php namespace FHIR\Resources\Infrastructure\OperationOutcome;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;

/**
 * Class FHIROperationOutcomeIssue
 * @package FHIR\Resources\Infrastructure\OperationOutcome
 */
class FHIROperationOutcomeIssue extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $severity = null;

    /** @var FHIRCoding */
    protected $type = null;

    /** @var FHIRString */
    protected $details = null;

    /** @var FHIRString[]|ElementCollection */
    protected $location;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->location = new ElementCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getSeverity()
    {
        return $this->severity;
    }

    /**
     * @param FHIRCode $severity
     */
    public function setSeverity(FHIRCode $severity)
    {
        $this->severity = $severity;
    }

    /**
     * @return FHIRCoding
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCoding $type
     */
    public function setType(FHIRCoding $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRString
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param FHIRString $details
     */
    public function setDetails(FHIRString $details)
    {
        $this->details = $details;
    }

    /**
     * @return ElementCollection|FHIRString[]
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRString $location
     */
    public function addLocation(FHIRString $location)
    {
        $this->location->append($location);
    }
}