<?php namespace FHIR\Resources\Clinical;

use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Clinical\Medication\FHIRMedicationPackage;
use FHIR\Resources\Clinical\Medication\FHIRMedicationProduct;

/**
 * Class FHIRMedication
 * @package FHIR\Resources\Clinical
 */
class FHIRMedication extends FHIRResource
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRCodeableConcept */
    protected $code = null;

    /** @var FHIRBoolean */
    protected $isBrand = null;

    /** @var \FHIR\Resources\Administrative\FHIROrganization */
    protected $manufacturer = null;

    /** @var FHIRCode */
    protected $kind = null;

    /** @var FHIRMedicationPackage */
    protected $package = null;

    /** @var FHIRMedicationProduct */
    protected $product = null;

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
     * @return FHIRBoolean
     */
    public function getIsBrand()
    {
        return $this->isBrand;
    }

    /**
     * @param FHIRBoolean $isBrand
     */
    public function setIsBrand(FHIRBoolean $isBrand)
    {
        $this->isBrand = $isBrand;
    }

    /**
     * @return \FHIR\Resources\Administrative\FHIROrganization
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }

    /**
     * @param \FHIR\Resources\Administrative\FHIROrganization $manufacturer
     */
    public function setManufacturer(FHIROrganization $manufacturer)
    {
        $this->manufacturer = $manufacturer;
    }

    /**
     * @return FHIRCode
     */
    public function getKind()
    {
        return $this->kind;
    }

    /**
     * @param FHIRCode $kind
     */
    public function setKind(FHIRCode $kind)
    {
        $this->kind = $kind;
    }

    /**
     * @return FHIRMedicationPackage
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param \FHIR\Resources\Clinical\Medication\FHIRMedicationPackage $package
     */
    public function setPackage(FHIRMedicationPackage $package)
    {
        $this->package = $package;
    }

    /**
     * @return FHIRMedicationProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \FHIR\Resources\Clinical\Medication\FHIRMedicationProduct $product
     */
    public function setProduct(FHIRMedicationProduct $product)
    {
        $this->product = $product;
    }
}