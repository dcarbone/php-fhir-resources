<?php namespace FHIR\Resources\Administrative;

use FHIR\Elements\Complex\FHIRIdentifier;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\FHIRResource;

/**
 * Class FHIRLocation
 * @package FHIR\Resources\Administrative
 */
class FHIRLocation extends FHIRResource
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRString */
    protected $description = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRContact */
    protected $telecom = null;

    /** @var FHIRAddress */
    protected $address = null;

    /** @var FHIRCodeableConcept */
    protected $physicalType = null;

    /** @var FHIROrganization */
    protected $managingOrganization = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRLocation */
    protected $partOf = null;

    /** @var FHIRCode */
    protected $mode = null;

}