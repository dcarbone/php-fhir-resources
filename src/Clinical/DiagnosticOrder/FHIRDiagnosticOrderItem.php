<?php namespace FHIR\Resources\Clinical\DiagnosticOrder;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Clinical\FHIRSpecimen;

/**
 * Class FHIRDiagnosticOrderItem
 * @package FHIR\Resources\Clinical\DiagnosticOrder
 */
class FHIRDiagnosticOrderItem extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRSpecimen[]|ResourceCollection */
    protected $specimen;

    /** @var FHIRCodeableConcept */
    protected $bodySite = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRDiagnosticOrderEvent[]|ResourceComponentCollection */
    protected $event;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specimen = new ResourceCollection();
        $this->event = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return ResourceCollection|FHIRSpecimen[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * @param FHIRSpecimen $specimen
     */
    public function addSpecimen(FHIRSpecimen $specimen)
    {
        $this->specimen->append($specimen);
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * @param FHIRCodeableConcept $bodySite
     */
    public function setBodySite(FHIRCodeableConcept $bodySite)
    {
        $this->bodySite = $bodySite;
    }

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $status
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
    }

    /**
     * @return ResourceComponentCollection|FHIRDiagnosticOrderEvent[]
     */
    public function getEvent()
    {
        return $this->event;
    }

    /**
     * @param FHIRDiagnosticOrderEvent $event
     */
    public function addEvent(FHIRDiagnosticOrderEvent $event)
    {
        $this->event->append($event);
    }
}