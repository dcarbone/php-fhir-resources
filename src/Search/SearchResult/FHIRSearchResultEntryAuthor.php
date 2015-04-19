<?php namespace FHIR\Resources\Search\SearchResult;

use FHIR\Common\AbstractFHIRObject;

/**
 * Class FHIRSearchResultEntryAuthor
 * @package FHIR\Resources\Search\SearchResult
 */
class FHIRSearchResultEntryAuthor extends AbstractFHIRObject
{
    /** @var string */
    protected $name;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->getName();
    }
}