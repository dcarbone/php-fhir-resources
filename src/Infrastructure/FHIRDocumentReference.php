<?php namespace FHIR\Resources\Infrastructure;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Elements\Primitive\FHIRInteger;
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
use FHIR\Resources\Infrastructure\DocumentReference\FHIRDocumentReferenceContext;
use FHIR\Resources\Infrastructure\DocumentReference\FHIRDocumentReferenceRelatesTo;
use FHIR\Resources\Infrastructure\DocumentReference\FHIRDocumentReferenceService;

/**
 * Class FHIRDocumentReference
 * @package FHIR\Resources\Infrastructure
 */
class FHIRDocumentReference extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRIdentifier */
    protected $masterIdentifier = null;

    /** @var FHIRPatient|FHIRPractitioner|FHIRGroup|FHIRDevice */
    protected $subject = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRCodeableConcept */
    protected $class = null;

    /** @var FHIRPractitioner[]|FHIRDevice[]|FHIRPatient[]|FHIRRelatedPerson[]|ResourceCollection */
    protected $author;

    /** @var FHIROrganization */
    protected $custodian = null;

    /** @var FHIRUri */
    protected $policyManager = null;

    /** @var FHIRPractitioner|FHIROrganization */
    protected $authenticator = null;

    /** @var FHIRDateTime */
    protected $created = null;

    /** @var FHIRInstant */
    protected $index = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCodeableConcept */
    protected $docStatus = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $confidentiality;

    /** @var FHIRCode */
    protected $primaryLanguage = null;

    /** @var FHIRCode */
    protected $mimeType = null;

    /** @var FHIRUri[]|ElementCollection */
    protected $format;

    /** @var FHIRInteger */
    protected $size = null;

    /** @var FHIRString */
    protected $hash = null;

    /** @var FHIRUri */
    protected $location = null;

    /** @var FHIRDocumentReferenceRelatesTo[]|ResourceComponentCollection */
    protected $relatesTo;

    /** @var FHIRDocumentReferenceService */
    protected $service = null;

    /** @var FHIRDocumentReferenceContext */
    protected $context = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->author = new ResourceCollection();
        $this->confidentiality = new ElementCollection();
        $this->format = new ElementCollection();
        $this->relatesTo = new ResourceComponentCollection();
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
     * @return FHIRDevice|FHIRGroup|FHIRPatient|FHIRPractitioner
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRPatient|FHIRPractitioner $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRPatient ||
            $subject instanceof FHIRPractitioner)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRPatient, or FHIRPractitioner',
                $subject);
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
     * @return FHIRCodeableConcept
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * @param FHIRCodeableConcept $class
     */
    public function setClass(FHIRCodeableConcept $class)
    {
        $this->class = $class;
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
     * @return FHIROrganization
     */
    public function getCustodian()
    {
        return $this->custodian;
    }

    /**
     * @param FHIROrganization $custodian
     */
    public function setCustodian(FHIROrganization $custodian)
    {
        $this->custodian = $custodian;
    }

    /**
     * @return FHIRUri
     */
    public function getPolicyManager()
    {
        return $this->policyManager;
    }

    /**
     * @param FHIRUri $policyManager
     */
    public function setPolicyManager(FHIRUri $policyManager)
    {
        $this->policyManager = $policyManager;
    }

    /**
     * @return FHIROrganization|FHIRPractitioner
     */
    public function getAuthenticator()
    {
        return $this->authenticator;
    }

    /**
     * @param FHIROrganization|FHIRPractitioner $authenticator
     */
    public function setAuthenticator($authenticator)
    {
        if ($authenticator instanceof FHIROrganization || $authenticator instanceof FHIRPractitioner)
            $this->authenticator = $authenticator;
        else
            throw $this->createInvalidPropertyValueTypeException('authenticator', 'FHIROrganization or FHIRPractitioner', $authenticator);
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
     * @return FHIRInstant
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param FHIRInstant $index
     */
    public function setIndex(FHIRInstant $index)
    {
        $this->index = $index;
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
     * @return FHIRCodeableConcept
     */
    public function getDocStatus()
    {
        return $this->docStatus;
    }

    /**
     * @param FHIRCodeableConcept $docStatus
     */
    public function setDocStatus(FHIRCodeableConcept $docStatus)
    {
        $this->docStatus = $docStatus;
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
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getConfidentiality()
    {
        return $this->confidentiality;
    }

    /**
     * @param FHIRCodeableConcept $confidentiality
     */
    public function adConfidentiality(FHIRCodeableConcept $confidentiality)
    {
        $this->confidentiality->append($confidentiality);
    }

    /**
     * @return FHIRCode
     */
    public function getPrimaryLanguage()
    {
        return $this->primaryLanguage;
    }

    /**
     * @param FHIRCode $primaryLanguage
     */
    public function setPrimaryLanguage(FHIRCode $primaryLanguage)
    {
        $this->primaryLanguage = $primaryLanguage;
    }

    /**
     * @return FHIRCode
     */
    public function getMimeType()
    {
        return $this->mimeType;
    }

    /**
     * @param FHIRCode $mimeType
     */
    public function setMimeType(FHIRCode $mimeType)
    {
        $this->mimeType = $mimeType;
    }

    /**
     * @return ElementCollection|FHIRUri[]
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param FHIRUri $format
     */
    public function addFormat(FHIRUri $format)
    {
        $this->format->append($format);
    }

    /**
     * @return FHIRInteger
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param FHIRInteger $size
     */
    public function setSize(FHIRInteger $size)
    {
        $this->size = $size;
    }

    /**
     * @return FHIRString
     */
    public function getHash()
    {
        return $this->hash;
    }

    /**
     * @param FHIRString $hash
     */
    public function setHash(FHIRString $hash)
    {
        $this->hash = $hash;
    }

    /**
     * @return FHIRUri
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRUri $location
     */
    public function setLocation(FHIRUri $location)
    {
        $this->location = $location;
    }

    /**
     * @return ResourceComponentCollection|FHIRDocumentReferenceRelatesTo[]
     */
    public function getRelatesTo()
    {
        return $this->relatesTo;
    }

    /**
     * @param FHIRDocumentReferenceRelatesTo $relatesTo
     */
    public function addRelatesTo(FHIRDocumentReferenceRelatesTo $relatesTo)
    {
        $this->relatesTo->append($relatesTo);
    }

    /**
     * @return FHIRDocumentReferenceService
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param FHIRDocumentReferenceService $service
     */
    public function setService(FHIRDocumentReferenceService $service)
    {
        $this->service = $service;
    }

    /**
     * @return FHIRDocumentReferenceContext
     */
    public function getContext()
    {
        return $this->context;
    }

    /**
     * @param FHIRDocumentReferenceContext $context
     */
    public function setContext(FHIRDocumentReferenceContext $context)
    {
        $this->context = $context;
    }
}