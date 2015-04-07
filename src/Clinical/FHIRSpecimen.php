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
use FHIR\Resources\Clinical\Specimen\FHIRSpecimenCollection;
use FHIR\Resources\Clinical\Specimen\FHIRSpecimenContainer;
use FHIR\Resources\Clinical\Specimen\FHIRSpecimenSource;
use FHIR\Resources\Clinical\Specimen\FHIRSpecimenTreatment;

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

    /** @var FHIRSpecimenSource[]|ResourceComponentCollection */
    protected $source;

    /** @var FHIRSpecimenCollection */
    protected $collection = null;

    /** @var FHIRSpecimenTreatment[]|ResourceComponentCollection */
    protected $treatment;

    /** @var FHIRSpecimenContainer[]|ResourceComponentCollection */
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
                'FHIRDevice, FHIRQuestionnaireGroup, FHIRPatient, or FHIRSubstance',
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
     * @return ResourceComponentCollection|FHIRSpecimenSource[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param FHIRSpecimenSource $source
     */
    public function addSource(FHIRSpecimenSource $source)
    {
        $this->source->append($source);
    }

    /**
     * @return FHIRSpecimenCollection
     */
    public function getCollection()
    {
        return $this->collection;
    }

    /**
     * @param FHIRSpecimenCollection $collection
     */
    public function setCollection(FHIRSpecimenCollection $collection)
    {
        $this->collection = $collection;
    }

    /**
     * @return ResourceComponentCollection|FHIRSpecimenTreatment[]
     */
    public function getTreatment()
    {
        return $this->treatment;
    }

    /**
     * @param FHIRSpecimenTreatment $treatment
     */
    public function addTreatment(FHIRSpecimenTreatment $treatment)
    {
        $this->treatment->append($treatment);
    }

    /**
     * @return ResourceComponentCollection|FHIRSpecimenContainer[]
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * @param FHIRSpecimenContainer $container
     */
    public function addContainer(FHIRSpecimenContainer $container)
    {
        $this->container->append($container);
    }
}