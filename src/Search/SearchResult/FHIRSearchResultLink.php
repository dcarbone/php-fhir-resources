<?php namespace FHIR\Resources\Search\SearchResult;

use FHIR\Common\AbstractFHIRObject;

/**
 * Class FHIRSearchResultLink
 * @package FHIR\Resources\Search\SearchResult
 */
class FHIRSearchResultLink extends AbstractFHIRObject
{
    /** @var string */
    protected $href = null;

    /**
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * @param string $href
     */
    public function setHref($href)
    {
        $this->href = $href;
    }

    /**
     * @return string
     */
    public function getRel()
    {
        return $this->rel;
    }

    /**
     * @param string $rel
     */
    public function setRel($rel)
    {
        $this->rel = $rel;
    }

    /** @var string */
    protected $rel = null;
}