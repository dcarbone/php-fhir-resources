<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRSubstance;
use FHIR\Resources\Clinical\Specimen\FHIRCollection;
use FHIR\Resources\Clinical\Specimen\FHIRContainer;
use FHIR\Resources\Clinical\Specimen\FHIRSource;
use FHIR\Resources\Clinical\Specimen\FHIRTreatment;

/**
 * Class FHIRSpecimen
 * @package FHIR\Resources\Clinical
 */
class FHIRSpecimen extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRPatient|FHIRGroup|FHIRDevice|FHIRSubstance */
    protected $subject = null;

    /** @var FHIRIdentifier */
    protected $accessionIdentifier = null;

    /** @var FHIRDateTime */
    protected $receivedTime = null;

    /** @var FHIRSource[]|ResourceComponentCollection */
    protected $source;

    /** @var FHIRCollection */
    protected $collection = null;

    /** @var FHIRTreatment[]|ResourceComponentCollection */
    protected $treatment;

    /** @var FHIRContainer[]|ResourceComponentCollection */
    protected $container;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->treatment = new ResourceComponentCollection();
        $this->container = new ResourceComponentCollection();
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
     * @return FHIRDevice|FHIRGroup|FHIRPatient|FHIRSubstance
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRPatient|FHIRSubstance $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRPatient ||
            $subject instanceof FHIRSubstance)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRPatient, or FHIRSubstance',
                $subject);
        }
    }

    /**
     * @return FHIRIdentifier
     */
    public function getAccessionIdentifier()
    {
        return $this->accessionIdentifier;
    }

    /**
     * @param FHIRIdentifier $accessionIdentifier
     */
    public function setAccessionIdentifier(FHIRIdentifier $accessionIdentifier)
    {
        $this->accessionIdentifier = $accessionIdentifier;
    }

    /**
     * @return FHIRDateTime
     */
    public function getReceivedTime()
    {
        return $this->receivedTime;
    }

    /**
     * @param FHIRDateTime $receivedTime
     */
    public function setReceivedTime(FHIRDateTime $receivedTime)
    {
        $this->receivedTime = $receivedTime;
    }

    /**
     * @return ResourceComponentCollection|FHIRSource[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRSource $source
     */
    public function addSource(FHIRSource $source)
    {
        $this->source->append($source);
    }

    /**
     * @return FHIRCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param FHIRCollection $collection
     */
    public function setCollection(FHIRCollection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return ResourceComponentCollection|FHIRTreatment[]
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * @param FHIRTreatment $treatment
     */
    public function addTreatment(FHIRTreatment $treatment)
    {
        $this->treatment->append($treatment);
    }

    /**
     * @return ResourceComponentCollection|FHIRContainer[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param FHIRContainer $container
     */
    public function addContainer(FHIRContainer $container)
    {
        $this->container->append($container);
    }
}