<?php namespace FHIR\Resources\Clinical\Immunization;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Administrative\FHIROrganization;

/**
 * Class FHIRVaccinationProtocol
 * @package FHIR\Resources\Clinical\Immunization
 */
class FHIRVaccinationProtocol extends AbstractFHIRObject
{
    /** @var FHIRInteger */
    protected $doseSequence = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var \FHIR\Resources\Administrative\FHIROrganization */
    protected $authority = null;

    /** @var FHIRString */
    protected $series = null;

    /** @var FHIRInteger */
    protected $seriesDoses = null;

    /** @var FHIRCodeableConcept */
    protected $doseTarget = null;

    /** @var FHIRCodeableConcept */
    protected $doseStatus = null;

    /** @var FHIRCodeableConcept */
    protected $doseStatusReason = null;

    /**
     * @return FHIRInteger
     */
    public function getDoseSequence()
    {
        return $this->doseSequence;
    }

    /**
     * @param FHIRInteger $doseSequence
     */
    public function setDoseSequence(FHIRInteger $doseSequence)
    {
        $this->doseSequence = $doseSequence;
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
     * @return \FHIR\Resources\Administrative\FHIROrganization
     */
    public function getAuthority()
    {
        return $this->authority;
    }

    /**
     * @param FHIROrganization $authority
     */
    public function setAuthority(FHIROrganization $authority)
    {
        $this->authority = $authority;
    }

    /**
     * @return FHIRString
     */
    public function getSeries()
    {
        return $this->series;
    }

    /**
     * @param FHIRString $series
     */
    public function setSeries(FHIRString $series)
    {
        $this->series = $series;
    }

    /**
     * @return FHIRInteger
     */
    public function getSeriesDoses()
    {
        return $this->seriesDoses;
    }

    /**
     * @param FHIRInteger $seriesDoses
     */
    public function setSeriesDoses(FHIRInteger $seriesDoses)
    {
        $this->seriesDoses = $seriesDoses;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getDoseTarget()
    {
        return $this->doseTarget;
    }

    /**
     * @param FHIRCodeableConcept $doseTarget
     */
    public function setDoseTarget(FHIRCodeableConcept $doseTarget)
    {
        $this->doseTarget = $doseTarget;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getDoseStatus()
    {
        return $this->doseStatus;
    }

    /**
     * @param FHIRCodeableConcept $doseStatus
     */
    public function setDoseStatus(FHIRCodeableConcept $doseStatus)
    {
        $this->doseStatus = $doseStatus;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getDoseStatusReason()
    {
        return $this->doseStatusReason;
    }

    /**
     * @param FHIRCodeableConcept $doseStatusReason
     */
    public function setDoseStatusReason(FHIRCodeableConcept $doseStatusReason)
    {
        $this->doseStatusReason = $doseStatusReason;
    }
}