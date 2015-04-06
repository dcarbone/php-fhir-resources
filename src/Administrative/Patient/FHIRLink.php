<?php namespace FHIR\Resources\Administrative\Patient;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIRPatient;

/**
 * Class FHIRLink
 * @package FHIR\Resources\Administrative\Patient
 */
class FHIRLink extends AbstractFHIRObject
{
    /** @var FHIRPatient */
    protected $other = null;

    /** @var FHIRCode */
    protected $type = null;

    /**
     * @return FHIRPatient
     */
    public function getOther()
    {
        return $this->other;
    }

    /**
     * @param FHIRPatient $other
     */
    public function setOther(FHIRPatient $other)
    {
        $this->other = $other;
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
}