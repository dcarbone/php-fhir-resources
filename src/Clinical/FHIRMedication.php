<?php namespace FHIR\Resources\Clinical;

use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\FHIRResource;
use FHIR\Resources\Clinical\Medication\FHIRPackage;
use FHIR\Resources\Clinical\Medication\FHIRProduct;

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

    /** @var FHIRPackage */
    protected $package = null;

    /** @var FHIRProduct */
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
     * @return FHIRPackage
     */
    public function getPackage()
    {
        return $this->package;
    }

    /**
     * @param \FHIR\Resources\Clinical\Medication\FHIRPackage $package
     */
    public function setPackage(FHIRPackage $package)
    {
        $this->package = $package;
    }

    /**
     * @return FHIRProduct
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param \FHIR\Resources\Clinical\Medication\FHIRProduct $product
     */
    public function setProduct(FHIRProduct $product)
    {
        $this->product = $product;
    }
}