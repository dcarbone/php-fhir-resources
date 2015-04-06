<?php namespace FHIR\Resources;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Elements\Complex\FHIRIdentifier;

/**
 * Class ResourceWithIdentifier
 * @package FHIR\Resource
 *
 * Many Resources have Identifiers, so extend this class rather than
 * implementing the Identifier element collection in every class.
 */
abstract class AbstractFHIRIdentifiableResource extends FHIRResource
{
    /** @var FHIRIdentifier[]|ElementCollection */
    protected $identifier;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->identifier = new ElementCollection();
    }

    /**
     * @return ElementCollection|FHIRIdentifier[]
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param FHIRIdentifier $identifier
     */
    public function addIdentifier(FHIRIdentifier $identifier)
    {
        $this->identifier->append($identifier);
    }
}