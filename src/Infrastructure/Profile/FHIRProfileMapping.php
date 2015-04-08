<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRId;

/**
 * Class FHIRProfileMapping
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileMapping extends AbstractFHIRObject
{
    /** @var FHIRId */
    protected $identity = null;

    /** @var FHIRUri */
    protected $uri = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $comments = null;

    /** @var FHIRString */
    protected $map = null;

    /**
     * @return FHIRId
     */
    public function getIdentity()
    {
        return $this->identity;
    }

    /**
     * @param FHIRId $identity
     */
    public function setIdentity(FHIRId $identity)
    {
        $this->identity = $identity;
    }

    /**
     * @return FHIRUri
     */
    public function getUri()
    {
        return $this->uri;
    }

    /**
     * @param FHIRUri $uri
     */
    public function setUri(FHIRUri $uri)
    {
        $this->uri = $uri;
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
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param FHIRString $comments
     */
    public function setComments(FHIRString $comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return FHIRString
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * @param FHIRString $map
     */
    public function setMap(FHIRString $map)
    {
        $this->map = $map;
    }
}