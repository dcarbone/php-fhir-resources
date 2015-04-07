<?php namespace FHIR\Resources\Clinical\CarePlan;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Complex\FHIRQuantity;
use FHIR\Elements\Complex\FHIRSchedule;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\Administrative\FHIRSubstance;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRCarePlanSimple
 * @package FHIR\Resources\Clinical\CarePlan
 */
class FHIRCarePlanSimple extends AbstractFHIRObject
{
    /** @var FHIRCode */
    protected $category = null;

    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRSchedule|FHIRPeriod|FHIRString */
    protected $timing = null;

    /** @var FHIRLocation */
    protected $location = null;

    /** @var FHIRPractitioner[]|FHIROrganization[]|FHIRRelatedPerson[]|FHIRPatient[]|ResourceCollection */
    protected $performer = array();

    /** @var FHIRMedication|FHIRSubstance */
    protected $product = null;

    /** @var FHIRQuantity */
    protected $dailyAmount = null;

    /** @var FHIRQuantity */
    protected $quantity = null;

    /** @var FHIRString */
    protected $details = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->performer = new ResourceCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param FHIRCode $category
     */
    public function setCategory(FHIRCode $category)
    {
        $this->category = $category;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param FHIRCodeableConcept $code
     */
    public function setCode(FHIRCodeableConcept $code)
    {
        $this->code = $code;
    }

    /**
     * @return FHIRPeriod|FHIRSchedule|FHIRString
     */
    public function getTiming()
    {
        return $this->timing;
    }

    /**
     * @param FHIRPeriod|FHIRSchedule|FHIRString $timing
     */
    public function setTiming($timing)
    {
        if ($timing instanceof FHIRPeriod ||
            $timing instanceof FHIRSchedule ||
            $timing instanceof FHIRString)
        {
            $this->timing = $timing;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'timing',
                'FHIRPeriod, FHIRSchedule, or FHIRString',
                $timing);
        }
    }

    /**
     * @return FHIRLocation
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * @param FHIRLocation $location
     */
    public function setLocation(FHIRLocation $location)
    {
        $this->location = $location;
    }

    /**
     * @return ResourceCollection|FHIROrganization[]|FHIRPatient[]|FHIRPractitioner[]|FHIRRelatedPerson[]
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param FHIROrganization|FHIRPatient|FHIRPractitioner|FHIRRelatedPerson $performer
     */
    public function addPerformer($performer)
    {
        if ($performer instanceof FHIROrganization ||
            $performer instanceof FHIRPatient ||
            $performer instanceof FHIRPractitioner ||
            $performer instanceof FHIRRelatedPerson)
        {
            $this->performer->append($performer);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'performer',
                'FHIROrganization, FHIRPatient, FHIRPractitioner, or FHIRRelatedPerson',
                $performer);
        }
    }

    /**
     * @return FHIRMedication|FHIRSubstance
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param FHIRMedication|FHIRSubstance $product
     */
    public function setProduct($product)
    {
        if ($product instanceof FHIRMedication ||
            $product instanceof FHIRSubstance)
        {
            $this->product = $product;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'product',
                'FHIRMedication or FHIRSubstance',
                $product);
        }
    }

    /**
     * @return FHIRQuantity
     */
    public function getDailyAmount()
    {
        return $this->dailyAmount;
    }

    /**
     * @param FHIRQuantity $dailyAmount
     */
    public function setDailyAmount(FHIRQuantity $dailyAmount)
    {
        $this->dailyAmount = $dailyAmount;
    }

    /**
     * @return FHIRQuantity
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRQuantity $quantity
     */
    public function setQuantity(FHIRQuantity $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return FHIRString
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param FHIRString $details
     */
    public function setDetails(FHIRString $details)
    {
        $this->details = $details;
    }
}