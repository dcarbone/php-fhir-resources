<?php namespace FHIR\Resources\Administrative\Location;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRDecimal;

/**
 * Class FHIRLocationPosition
 * @package FHIR\Resources\Administrative\Location
 */
class FHIRLocationPosition extends AbstractFHIRObject
{
    /** @var FHIRDecimal */
    protected $longitude = null;

    /** @var FHIRDecimal */
    protected $latitude = null;

    /** @var FHIRDecimal */
    protected $altitude = null;

    /**
     * @return FHIRDecimal
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * @param FHIRDecimal $longitude
     */
    public function setLongitude(FHIRDecimal $longitude)
    {
        $this->longitude = $longitude;
    }

    /**
     * @return FHIRDecimal
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * @param FHIRDecimal $latitude
     */
    public function setLatitude(FHIRDecimal $latitude)
    {
        $this->latitude = $latitude;
    }

    /**
     * @return FHIRDecimal
     */
    public function getAltitude()
    {
        return $this->altitude;
    }

    /**
     * @param FHIRDecimal $altitude
     */
    public function setAltitude(FHIRDecimal $altitude)
    {
        $this->altitude = $altitude;
    }
}