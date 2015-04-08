<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Infrastructure\FHIRProfile;

/**
 * Class FHIRConformanceDocument
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceDocument extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $mode = null;

    /** @var FHIRString */
    protected $documentation = null;

    /** @var FHIRProfile */
    protected $profile = null;

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
}