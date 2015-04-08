<?php namespace FHIR\Resources\Administrative\Encounter;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Resources\Administrative\FHIRLocation;
use FHIR\Resources\FHIRResourceInterface;

/**
 * Class FHIREncounterHospitalization
 * @package FHIR\Resources\Administrative\Encounter
 */
class FHIREncounterHospitalization extends AbstractFHIRObject
{
    /** @var FHIRIdentifier */
    protected $preAdmissionIdentifier = null;

    /** @var FHIRLocation */
    protected $origin = null;

    /** @var FHIRCodeableConcept */
    protected $admitSource = null;

    /** @var FHIRPeriod */
    protected $period = null;

    /** @var FHIRCodeableConcept */
    protected $diet = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $specialCourtesy;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $specialArrangement;

    /** @var FHIRLocation */
    protected $destination = null;

    /** @var FHIRCodeableConcept */
    protected $dischargeDisposition = null;

    /** @var FHIRResourceInterface */
    protected $dischargeDiagnosis = null;

    /** @var FHIRBoolean */
    protected $reAdmission = null;

    /** @var FHIREncounterHospitalizationAccomodation[]|ResourceComponentCollection */
    protected $accomodation;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->specialCourtesy = new ElementCollection();
        $this->specialArrangement = new ElementCollection();
        $this->accomodation = new ResourceComponentCollection();
    }

    /**
     * @return FHIRIdentifier
     */
    public function getPreAdmissionIdentifier()
    {
        return $this->preAdmissionIdentifier;
    }

    /**
     * @param FHIRIdentifier $preAdmissionIdentifier
     */
    public function setPreAdmissionIdentifier(FHIRIdentifier $preAdmissionIdentifier)
    {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
    }

    /**
     * @return FHIRLocation
     */
    public function getOrigin()
    {
        return $this->origin;
    }

    /**
     * @param FHIRLocation $origin
     */
    public function setOrigin(FHIRLocation $origin)
    {
        $this->origin = $origin;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getAdmitSource()
    {
        return $this->admitSource;
    }

    /**
     * @param FHIRCodeableConcept $admitSource
     */
    public function setAdmitSource(FHIRCodeableConcept $admitSource)
    {
        $this->admitSource = $admitSource;
    }

    /**
     * @return FHIRPeriod
     */
    public function getPeriod()
    {
        return $this->period;
    }

    /**
     * @param FHIRPeriod $period
     */
    public function setPeriod(FHIRPeriod $period)
    {
        $this->period = $period;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * @param FHIRCodeableConcept $diet
     */
    public function setDiet(FHIRCodeableConcept $diet)
    {
        $this->diet = $diet;
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy()
    {
        return $this->specialCourtesy;
    }

    /**
     * @param FHIRCodeableConcept $specialCourtesy
     */
    public function addSpecialCourtesy(FHIRCodeableConcept $specialCourtesy)
    {
        $this->specialCourtesy->append($specialCourtesy);
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getSpecialArrangement()
    {
        return $this->specialArrangement;
    }

    /**
     * @param FHIRCodeableConcept $specialArrangement
     */
    public function addSpecialArrangement(FHIRCodeableConcept $specialArrangement)
    {
        $this->specialArrangement->append($specialArrangement);
    }

    /**
     * @return FHIRLocation
     */
    public function getDestination()
    {
        return $this->destination;
    }

    /**
     * @param FHIRLocation $destination
     */
    public function setDestination(FHIRLocation $destination)
    {
        $this->destination = $destination;
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getDischargeDisposition()
    {
        return $this->dischargeDisposition;
    }

    /**
     * @param FHIRCodeableConcept $dischargeDisposition
     */
    public function setDischargeDisposition(FHIRCodeableConcept $dischargeDisposition)
    {
        $this->dischargeDisposition = $dischargeDisposition;
    }

    /**
     * @return FHIRResourceInterface
     */
    public function getDischargeDiagnosis()
    {
        return $this->dischargeDiagnosis;
    }

    /**
     * @param FHIRResourceInterface $dischargeDiagnosis
     */
    public function setDischargeDiagnosis(FHIRResourceInterface $dischargeDiagnosis)
    {
        $this->dischargeDiagnosis = $dischargeDiagnosis;
    }

    /**
     * @return FHIRBoolean
     */
    public function getReAdmission()
    {
        return $this->reAdmission;
    }

    /**
     * @param FHIRBoolean $reAdmission
     */
    public function setReAdmission(FHIRBoolean $reAdmission)
    {
        $this->reAdmission = $reAdmission;
    }

    /**
     * @return ResourceComponentCollection|FHIREncounterHospitalizationAccomodation[]
     */
    public function getAccomodation()
    {
        return $this->accomodation;
    }

    /**
     * @param FHIREncounterHospitalizationAccomodation $accomodation
     */
    public function addAccomodation(FHIREncounterHospitalizationAccomodation $accomodation)
    {
        $this->accomodation->append($accomodation);
    }
}