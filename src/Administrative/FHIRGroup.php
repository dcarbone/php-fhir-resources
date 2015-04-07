<?php namespace FHIR\Resources\Administrative;

use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\Group\FHIRGroupCharacteristic;
use FHIR\Resources\Clinical\FHIRMedication;

/**
 * Class FHIRGroup
 * @package FHIR\Resources\Administrative
 */
class FHIRGroup extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCode */
    protected $type = null;

    /** @var FHIRBoolean */
    protected $actual = null;

    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRInteger */
    protected $quantity = null;

    /** @var FHIRPatient[]|FHIRPractitioner[]|FHIRDevice[]|FHIRMedication[]|FHIRSubstance[]|ResourceCollection */
    protected $member;

    /** @var FHIRGroupCharacteristic[]|ResourceComponentCollection */
    protected $characteristic;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->member = new ResourceCollection();
        $this->characteristic = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCode
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRCode $type
     */
    public function setType(FHIRCode $type)
    {
        $this->type = $type;
    }

    /**
     * @return FHIRBoolean
     */
    public function getActual()
    {
        return $this->actual;
    }

    /**
     * @param FHIRBoolean $actual
     */
    public function setActual(FHIRBoolean $actual)
    {
        $this->actual = $actual;
    }

    /**
     * @return FHIRString
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRString $name
     */
    public function setName(FHIRString $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRInteger
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param FHIRInteger $quantity
     */
    public function setQuantity(FHIRInteger $quantity)
    {
        $this->quantity = $quantity;
    }

    /**
     * @return ResourceCollection|FHIRDevice[]|FHIRMedication[]|FHIRPatient[]|FHIRPractitioner[]|FHIRSubstance[]
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param ResourceCollection|FHIRDevice[]|FHIRMedication[]|FHIRPatient[]|FHIRPractitioner[]|FHIRSubstance[] $member
     */
    public function addMember($member)
    {
        if ($member instanceof FHIRDevice ||
            $member instanceof FHIRMedication ||
            $member instanceof FHIRPatient ||
            $member instanceof FHIRPractitioner ||
            $member instanceof FHIRSubstance)
        {
            $this->member->append($member);
        }
        else
        {
            throw $this->createInvalidCollectionValueException(
                'member',
                'FHIRDevice, FHIRMedication, FHIRPatient, FHIRPractitioner, or FHIRSubstance',
                $member);
        }
    }

    /**
     * @return FHIRGroupCharacteristic[]|ResourceComponentCollection
     */
    public function getCharacteristic()
    {
        return $this->characteristic;
    }

    /**
     * @param FHIRGroupCharacteristic $characteristic
     */
    public function addCharacteristic(FHIRGroupCharacteristic $characteristic)
    {
        $this->characteristic->append($characteristic);
    }
}