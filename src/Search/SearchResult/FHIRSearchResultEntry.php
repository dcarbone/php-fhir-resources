<?php namespace FHIR\Resources\Search\SearchResult;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Resources\FHIRResource;

/**
 * Class FHIRSearchResultEntry
 * @package FHIR\Resources\Search\SearchResult
 */
class FHIRSearchResultEntry extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $title = null;

    /** @var FHIRUri */
    protected $id = null;

    /** @var FHIRSearchResultLink[]|ResourceComponentCollection */
    protected $link;

    /** @var FHIRDateTime */
    protected $updated = null;

    /** @var FHIRSearchResultEntryAuthor[]|ResourceComponentCollection */
    protected $author;

    /** @var FHIRDateTime */
    protected $published = null;

    /** @var FHIRResource */
    protected $content = null;

    /** @var FHIRString */
    protected $summary = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->link = new ResourceComponentCollection();
        $this->author = new ResourceComponentCollection();
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
     * @return FHIRUri
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param FHIRUri $id
     */
    public function setId(FHIRUri $id)
    {
        $this->id = $id;
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
     * @return ResourceComponentCollection|FHIRSearchResultEntryAuthor[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param FHIRSearchResultEntryAuthor $author
     */
    public function addAuthor(FHIRSearchResultEntryAuthor $author)
    {
        $this->author->append($author);
    }

    /**
     * @return FHIRDateTime
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @param FHIRDateTime $published
     */
    public function setPublished(FHIRDateTime $published)
    {
        $this->published = $published;
    }

    /**
     * @return FHIRResource
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param FHIRResource $content
     */
    public function setContent(FHIRResource $content)
    {
        $this->content = $content;
    }

    /**
     * @return FHIRString
     */
    public function getSummary()
    {
        return $this->summary;
    }

    /**
     * @param FHIRString $summary
     */
    public function setSummary(FHIRString $summary)
    {
        $this->summary = $summary;
    }
}