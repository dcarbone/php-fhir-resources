<?php namespace FHIR\Resources\Administrative;

use FHIR\Resources\AbstractFHIRIdentifiableResource;

/**
 * Class FHIROrganization
 * @package FHIR\Resources\Administrative
 */
class FHIROrganization extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRString */
    protected $name = null;

    /** @var FHIRCodeableConcept */
    protected $type = null;

    /** @var FHIRContact[]|ElementCollection */
    protected $telecom;

    /** @var FHIRAddress[]|ElementCollection */
    protected $address;

    /** @var FHIROrganization */
    protected $partOf = null;

    /** @var FHIRLocation[]|ResourceCollection */
    protected $location;
}