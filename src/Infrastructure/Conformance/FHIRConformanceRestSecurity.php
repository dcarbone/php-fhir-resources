<?php namespace FHIR\Resources\Infrastructure\Conformance;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;

/**
 * Class FHIRConformanceRestSecurity
 * @package FHIR\Resources\Infrastructure\Conformance
 */
class FHIRConformanceRestSecurity extends AbstractFHIRObject
{
    /** @var FHIRBoolean */
    protected $cors = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $service;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRConformanceRestSecurityCertificate[]|ResourceComponentCollection */
    protected $certificate;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->service = new ElementCollection();
        $this->certificate = new ResourceComponentCollection();
    }

    /**
     * @return FHIRBoolean
     */
    public function getCors()
    {
        return $this->cors;
    }

    /**
     * @param FHIRBoolean $cors
     */
    public function setCors(FHIRBoolean $cors)
    {
        $this->cors = $cors;
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * @param FHIRCodeableConcept $service
     */
    public function addService(FHIRCodeableConcept $service)
    {
        $this->service->append($service);
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
     * @return ResourceComponentCollection|FHIRConformanceRestSecurityCertificate[]
     */
    public function getCertificate()
    {
        return $this->certificate;
    }

    /**
     * @param FHIRConformanceRestSecurityCertificate $certificate
     */
    public function addCertificate(FHIRConformanceRestSecurityCertificate $certificate)
    {
        $this->certificate->append($certificate);
    }
}