<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Primitive\FHIRUri;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;

/**
 * Class FHIRDocumentManifest
 * @package FHIR\Resources\Infrastructure
 */
class FHIRDocumentManifest extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRIdentifier */
    protected $masterIdentifier = null;

    /** @var FHIRPatient[]|FHIRPractitioner[]|FHIRGroup[]|FHIRDevice[]|ResourceCollection */
    protected $subject;

    /** @var FHIRPatient[]|FHIRPractitioner[]|FHIROrganization[]|ResourceCollection */
    protected $recipient;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRPractitioner[]|FHIRDevice[]|FHIRPatient[]|FHIRRelatedPerson[]|ResourceCollection */
    protected $author;

    /** @var FHIRDateTime */
    protected $created = null;

    /** @var FHIRUri */
    protected $source = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRDocumentManifest */
    protected $supercedes = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCodeableConcept */
    protected $confidentiality = null;

    /** @var FHIRDocumentReference[]|FHIRBinary[]|FHIRMedia[]|ResourceCollection */
    protected $content;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->subject = new ResourceCollection();
        $this->recipient = new ResourceCollection();
        $this->author = new ResourceCollection();
        $this->content = new ResourceCollection();
    }

    /**
     * @return FHIRIdentifier
     */
    public function getMasterIdentifier()
    {
        return $this->masterIdentifier;
    }

    /**
     * @param FHIRIdentifier $masterIdentifier
     */
    public function setMasterIdentifier(FHIRIdentifier $masterIdentifier)
    {
        $this->masterIdentifier = $masterIdentifier;
    }

    /**
     * @return ResourceCollection|FHIRDevice[]|FHIRGroup[]|FHIRPatient[]|FHIRPractitioner[]
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param ResourceCollection|FHIRDevice[]|FHIRGroup[]|FHIRPatient[]|FHIRPractitioner[] $subject
     */
    public function addSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRPatient ||
            $subject instanceof FHIRPractitioner)
        {
            $this->subject->append($subject);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRPatient, or FHIRPractitioner',
                $subject);
        }
    }

    /**
     * @return ResourceCollection|FHIROrganization[]|FHIRPatient[]|FHIRPractitioner[]
     */
    public function getRecipient()
    {
        return $this->recipient;
    }

    /**
     * @param ResourceCollection|FHIROrganization[]|FHIRPatient[]|FHIRPractitioner[] $recipient
     */
    public function addRecipient($recipient)
    {
        if ($recipient instanceof FHIROrganization ||
            $recipient instanceof FHIRPatient ||
            $recipient instanceof FHIRPractitioner)
        {
            $this->recipient->append($recipient);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'recipient',
                'FHIROrganization, FHIRPatient, or FHIRPractitioner',
                $recipient);
        }
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCodeableConcept $type
     */
    public function setType(FHIRCodeableConcept $type)
    {
        $this->type = $type;
    }

    /**
     * @return ResourceCollection|FHIRDevice[]|FHIRPatient[]|FHIRPractitioner[]|FHIRRelatedPerson[]
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param ResourceCollection|FHIRDevice[]|FHIRPatient[]|FHIRPractitioner[]|FHIRRelatedPerson[] $author
     */
    public function addAuthor($author)
    {
        if ($author instanceof FHIRDevice ||
            $author instanceof FHIRPatient ||
            $author instanceof FHIRPractitioner ||
            $author instanceof FHIRRelatedPerson)
        {
            $this->author->append($author);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'author',
                'FHIRDevice, FHIRPatient, FHIRPractitioner, or FHIRRelatedPerson',
                $author);
        }
    }

    /**
     * @return FHIRDateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param FHIRDateTime $created
     */
    public function setCreated(FHIRDateTime $created)
    {
        $this->created = $created;
    }

    /**
     * @return FHIRUri
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRUri $source
     */
    public function setSource(FHIRUri $source)
    {
        $this->source = $source;
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
     * @return FHIRDocumentManifest
     */
    public function getSupercedes()
    {
        return $this->supercedes;
    }

    /**
     * @param FHIRDocumentManifest $supercedes
     */
    public function setSupercedes(FHIRDocumentManifest $supercedes)
    {
        $this->supercedes = $supercedes;
    }

    /**
     * @return FHIRString
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param FHIRString $description
     */
    public function setDescription(FHIRString $description)
    {
        $this->description = $description;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * @param FHIRCodeableConcept $confidentiality
     */
    public function setConfidentiality(FHIRCodeableConcept $confidentiality)
    {
        $this->confidentiality = $confidentiality;
    }

    /**
     * @return ResourceCollection|FHIRBinary[]|FHIRDocumentReference[]|FHIRMedia[]
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param ResourceCollection|FHIRBinary[]|FHIRDocumentReference[]|FHIRMedia[] $content
     */
    public function addContent($content)
    {
        if ($content instanceof FHIRBinary ||
            $content instanceof FHIRDocumentReference ||
            $content instanceof FHIRMedia)
        {
            $this->content->append($content);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'content',
                'FHIRBinary, FHIRDocumentReference, or FHIRMedia',
                $content);
        }
    }
}