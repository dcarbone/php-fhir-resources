<?php namespace FHIR\Resources\Administrative\Practitioner;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Resources\Administrative\FHIROrganization;

/**
 * Class FHIRPractitionerQualification
 * @package FHIR\Resources\Administrative\Practitioner
 */
class FHIRPractitionerQualification extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIROrganization */
    protected $issuer = null;

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
     * @return FHIROrganization
     */
    public function getIssuer()
    {
        return $this->issuer;
    }

    /**
     * @param FHIROrganization $issuer
     */
    public function setIssuer(FHIROrganization $issuer)
    {
        $this->issuer = $issuer;
    }
}