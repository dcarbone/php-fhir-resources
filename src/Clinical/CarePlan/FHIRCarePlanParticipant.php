<?php namespace FHIR\Resources\Clinical\CarePlan;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Administrative\FHIRRelatedPerson;

/**
 * Class FHIRCarePlanParticipant
 * @package FHIR\Resources\Clinical\CarePlan
 */
class FHIRCarePlanParticipant extends AbstractFHIRObject
{
    /** @var FHIRCodeableConcept */
    protected $role = null;

    /** @var FHIRPatient|FHIRPractitioner|FHIRRelatedPerson|FHIROrganization */
    protected $member = null;

    /**
     * @return FHIRCodeableConcept
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param FHIRCodeableConcept $role
     */
    public function setRole(FHIRCodeableConcept $role)
    {
        $this->role = $role;
    }

    /**
     * @return FHIROrganization|FHIRPatient|FHIRPractitioner|FHIRRelatedPerson
     */
    public function getMember()
    {
        return $this->member;
    }

    /**
     * @param FHIROrganization|FHIRPatient|FHIRPractitioner|FHIRRelatedPerson $member
     */
    public function setMember($member)
    {
        if ($member instanceof FHIROrganization ||
            $member instanceof FHIRPatient ||
            $member instanceof FHIRPractitioner ||
            $member instanceof FHIRRelatedPerson)
        {
            $this->member = $member;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'member',
                'FHIROrganization, FHIRPatient, FHIRCarePlanParticipant, or FHIRRelatedPerson',
                $member);
        }
    }
}