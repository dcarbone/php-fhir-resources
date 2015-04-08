<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRCoding;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Infrastructure\FHIRProfile;

/**
 * Class FHIRConformanceMessagingEvent
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceMessagingEvent extends AbstractFHIRObject
{
    /** @var FHIRCoding */
    protected $code = null;

    /** @var FHIRCode */
    protected $category = null;

    /** @var FHIRCode */
    protected $mode = null;

    /** @var FHIRCoding[]|ElementCollection */
    protected $protocol;

    /** @var FHIRCode */
    protected $focus = null;

    /** @var FHIRProfile */
    protected $request = null;

    /** @var FHIRProfile */
    protected $response = null;

    /** @var FHIRString */
    protected $documentation = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->protocol = new ElementCollection();
    }

    /**
     * @return FHIRCoding
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCoding $code
     */
    public function setCode(FHIRCoding $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRCode
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param FHIRCode $category
     */
    public function setCategory(FHIRCode $category)
    {
        $this->category = $category;
    }

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
     * @return ElementCollection|FHIRCoding[]
     */
    public function getProtocol()
    {
        return $this->protocol;
    }

    /**
     * @param FHIRCoding $protocol
     */
    public function addProtocol(FHIRCoding $protocol)
    {
        $this->protocol->append($protocol);
    }

    /**
     * @return FHIRCode
     */
    public function getFocus()
    {
        return $this->focus;
    }

    /**
     * @param FHIRCode $focus
     */
    public function setFocus(FHIRCode $focus)
    {
        $this->focus = $focus;
    }

    /**
     * @return FHIRProfile
     */
    public function getRequest()
    {
        return $this->request;
    }

    /**
     * @param FHIRProfile $request
     */
    public function setRequest(FHIRProfile $request)
    {
        $this->request = $request;
    }

    /**
     * @return FHIRProfile
     */
    public function getResponse()
    {
        return $this->response;
    }

    /**
     * @param FHIRProfile $response
     */
    public function setResponse(FHIRProfile $response)
    {
        $this->response = $response;
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
}