<?php namespace FHIR\Resources\Search;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Search\SearchResult\FHIRSearchResultEntry;
use FHIR\Resources\Search\SearchResult\FHIRSearchResultLink;

/**
 * Class FHIRSearchResult
 * @package FHIR\Resources\Search
 */
class FHIRSearchResult extends FHIRResource
{
    /** @var FHIRString */
    protected $title = null;

    /** @var FHIRSearchResultLink[]|ResourceComponentCollection */
    protected $link;

    /** @var FHIRInteger */
    protected $totalResults = null;

    /** @var FHIRDateTime */
    protected $updated = null;

    /** @var FHIRSearchResultEntry[]|ResourceComponentCollection */
    protected $entry;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->link = new ResourceComponentCollection();
        $this->entry = new ResourceComponentCollection();
    }

    /**
     * @return FHIRString
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param FHIRString $title
     */
    public function setTitle(FHIRString $title)
    {
        $this->title = $title;
    }

    /**
     * @return ResourceComponentCollection|FHIRSearchResultLink[]
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param FHIRSearchResultLink $link
     */
    public function addLink(FHIRSearchResultLink $link)
    {
        $this->link->append($link);
    }

    /**
     * @return FHIRInteger
     */
    public function getTotalResults()
    {
        return $this->totalResults;
    }

    /**
     * @param FHIRInteger $totalResults
     */
    public function setTotalResults(FHIRInteger $totalResults)
    {
        $this->totalResults = $totalResults;
    }

    /**
     * @return FHIRDateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @param FHIRDateTime $updated
     */
    public function setUpdated(FHIRDateTime $updated)
    {
        $this->updated = $updated;
    }

    /**
     * @return ResourceComponentCollection|FHIRSearchResultEntry[]
     */
    public function getEntry()
    {
        return $this->entry;
    }

    /**
     * @param FHIRSearchResultEntry $entry
     */
    public function addEntry(FHIRSearchResultEntry $entry)
    {
        $this->entry->append($entry);
    }
}