<?php namespace FHIR\Resources\Infrastructure\Composition;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;

/**
 * Class FHIRCompositionAttester
 * @package FHIR\Resources\Infrastructure\Composition
 */
class FHIRCompositionAttester extends AbstractFHIRObject
{
    /** @var FHIRCode[]|ElementCollection */
    protected $mode;

    /** @var FHIRDateTime */
    protected $time = null;

    /** @var FHIRPatient|FHIRPractitioner|FHIROrganization */
    protected $party = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mode = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRCode[]
     */
    public function getMode()
    {
        return $this->mode;
    }

    /**
     * @param FHIRCode $mode
     */
    public function addMode(FHIRCode $mode)
    {
        $this->mode->append($mode);
    }

    /**
     * @return FHIRDateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param FHIRDateTime $time
     */
    public function setTime(FHIRDateTime $time)
    {
        $this->time = $time;
    }

    /**
     * @return FHIROrganization|FHIRPatient|FHIRPractitioner
     */
    public function getParty()
    {
        return $this->party;
    }

    /**
     * @param FHIROrganization|FHIRPatient|FHIRPractitioner $party
     */
    public function setParty($party)
    {
        if ($party instanceof FHIROrganization ||
            $party instanceof FHIRPatient ||
            $party instanceof FHIRPractitioner)
        {
            $this->party = $party;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'party',
                'FHIROrganization, FHIRPatient, or FHIRPractitioner',
                $party);
        }
    }
}