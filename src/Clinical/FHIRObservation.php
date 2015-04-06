<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRAttachment;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\FHIRRatio;
use FHIR\Elements\Complex\FHIRSampledData;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRInstant;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\Observation\FHIRReferenceRange;
use FHIR\Resources\Clinical\Observation\FHIRRelated;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRLocation;

/**
 * Class FHIRObservation
 * @package FHIR\Resources\Clinical
 */
class FHIRObservation extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $name = null;

    /** @var FHIRQuantity|FHIRCodeableConcept|FHIRAttachment|FHIRRatio|FHIRPeriod|FHIRSampledData|FHIRString */
    protected $value = null;

    /** @var FHIRCodeableConcept */
    protected $interpretation = null;

    /** @var FHIRString */
    protected $comments = null;

    /** @var FHIRDateTime|FHIRPeriod */
    protected $applies = null;

    /** @var FHIRInstant */
    protected $issued = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRCode */
    protected $reliability = null;

    /** @var FHIRCodeableConcept */
    protected $bodySite = null;

    /** @var FHIRCodeableConcept */
    protected $method = null;

    /** @var FHIRPatient|FHIRGroup|FHIRDevice|FHIRLocation */
    protected $subject = null;

    /** @var FHIRSpecimen */
    protected $specimen = null;

    /** @var FHIRPractitioner[]|FHIRDevice[]|FHIROrganization[]|ResourceCollection */
    protected $performer;

    /** @var FHIRRelated[]|ResourceComponentCollection */
    protected $related;

    /** @var FHIRReferenceRange[]|ResourceComponentCollection */
    protected $referenceRange;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->performer = new ResourceCollection();
        $this->related = new ResourceComponentCollection();
        $this->referenceRange = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRCodeableConcept $name
     */
    public function setName(FHIRCodeableConcept $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRAttachment|FHIRCodeableConcept|FHIRPeriod|FHIRQuantity|FHIRRatio|FHIRSampledData|FHIRString
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param FHIRAttachment|FHIRCodeableConcept|FHIRPeriod|FHIRQuantity|FHIRRatio|FHIRSampledData|FHIRString $value
     */
    public function setValue($value)
    {
        if ($value instanceof FHIRAttachment ||
            $value instanceof FHIRCodeableConcept ||
            $value instanceof FHIRPeriod ||
            $value instanceof FHIRQuantity ||
            $value instanceof FHIRRatio ||
            $value instanceof FHIRSampledData ||
            $value instanceof FHIRString)
        {
            $this->value = $value;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'value',
                'FHIRAttachment, FHIRCodeableConcept, FHIRPeriod, FHIRQuantity, FHIRRatio, FHIRSampledData, or FHIRString',
                $value);
        }
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getInterpretation()
    {
        return $this->interpretation;
    }

    /**
     * @param FHIRCodeableConcept $interpretation
     */
    public function setInterpretation(FHIRCodeableConcept $interpretation)
    {
        $this->interpretation = $interpretation;
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
     * @return FHIRDateTime|FHIRPeriod
     */
    public function getApplies()
    {
        return $this->applies;
    }

    /**
     * @param FHIRDateTime|FHIRPeriod $applies
     */
    public function setApplies($applies)
    {
        if ($applies instanceof FHIRDateTime || $applies instanceof FHIRPeriod)
            $this->applies = $applies;
        else
            throw $this->createInvalidPropertyValueTypeException('applies', 'FHIRDateTime or FHIRPeriod', $applies);
    }

    /**
     * @return FHIRInstant
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * @param FHIRInstant $issued
     */
    public function setIssued(FHIRInstant $issued)
    {
        $this->issued = $issued;
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
     * @return FHIRCode
     */
    public function getReliability()
    {
        return $this->reliability;
    }

    /**
     * @param FHIRCode $reliability
     */
    public function setReliability(FHIRCode $reliability)
    {
        $this->reliability = $reliability;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getBodySite()
    {
        return $this->bodySite;
    }

    /**
     * @param FHIRCodeableConcept $bodySite
     */
    public function setBodySite(FHIRCodeableConcept $bodySite)
    {
        $this->bodySite = $bodySite;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param FHIRCodeableConcept $method
     */
    public function setMethod(FHIRCodeableConcept $method)
    {
        $this->method = $method;
    }

    /**
     * @return FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRLocation ||
            $subject instanceof FHIRPatient)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRGroup, FHIRLocation, or FHIRPatient',
                $subject);
        }
    }

    /**
     * @return FHIRSpecimen
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * @param FHIRSpecimen $specimen
     */
    public function setSpecimen(FHIRSpecimen $specimen)
    {
        $this->specimen = $specimen;
    }

    /**
     * @return ResourceCollection|FHIRDevice[]|FHIROrganization[]|FHIRPractitioner[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param ResourceCollection|FHIRDevice[]|FHIROrganization[]|FHIRPractitioner[] $performer
     */
    public function addPerformer($performer)
    {
        if ($performer instanceof FHIRDevice ||
            $performer instanceof FHIROrganization ||
            $performer instanceof FHIRPractitioner)
        {
            $this->performer->append($performer);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'performer',
                'FHIRDevice, FHIROrganization, or FHIRPractitioner',
                $performer);
        }
    }

    /**
     * @return ResourceComponentCollection|FHIRRelated[]
     */
    public function getRelated()
    {
        return $this->related;
    }

    /**
     * @param FHIRRelated $related
     */
    public function addRelated(FHIRRelated $related)
    {
        $this->related->append($related);
    }

    /**
     * @return ResourceComponentCollection|FHIRReferenceRange[]
     */
    public function getReferenceRange()
    {
        return $this->referenceRange;
    }

    /**
     * @param FHIRReferenceRange $referenceRange
     */
    public function setReferenceRange(FHIRReferenceRange $referenceRange)
    {
        $this->referenceRange->append($referenceRange);
    }
}