<?php namespace FHIR\Resources\Clinical;

use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Complex\FHIRAttachment;
use FHIR\Elements\Complex\FHIRCodeableConcept;
use FHIR\Elements\Complex\FHIRPeriod;
use FHIR\Elements\Primitive\FHIRDateTime;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRCode;
use FHIR\Resources\AbstractFHIRIdentifiableResource;
use FHIR\Resources\Administrative\FHIROrganization;
use FHIR\Resources\Administrative\FHIRPatient;
use FHIR\Resources\Administrative\FHIRPractitioner;
use FHIR\Resources\Clinical\DiagnosticReport\FHIRDiagnosticReportImage;
use FHIR\Resources\Administrative\FHIRDevice;
use FHIR\Resources\Administrative\FHIRGroup;
use FHIR\Resources\Administrative\FHIRLocation;

/**
 * Class FHIRDiagnosticReport
 * @package FHIR\Resources\Clinical
 */
class FHIRDiagnosticReport extends AbstractFHIRIdentifiableResource
{
    /** @var FHIRCodeableConcept */
    protected $name = null;

    /** @var FHIRCode */
    protected $status = null;

    /** @var FHIRDateTime */
    protected $issued = null;

    /** @var FHIRPatient|FHIRGroup|FHIRDevice|FHIRLocation */
    protected $subject = null;

    /** @var FHIRPractitioner|FHIROrganization */
    protected $performer = null;

    /** @var FHIRDiagnosticOrder[]|ResourceCollection */
    protected $requestDetail;

    /** @var FHIRCodeableConcept */
    protected $serviceCategory = null;

    /** @var FHIRDateTime|FHIRPeriod */
    protected $diagnostic = null;

    /** @var FHIRSpecimen[]|ResourceCollection */
    protected $specimen;

    /** @var FHIRObservation[]|ResourceCollection */
    protected $result;

    /** @var FHIRImagingStudy[]|ResourceCollection */
    protected $imagingStudy;

    /** @var FHIRString */
    protected $conclusion = null;

    /** @var FHIRCodeableConcept[]|ElementCollection */
    protected $codedDiagnosis;

    /** @var FHIRAttachment[]|ElementCollection */
    protected $presentedForm;

    /** @var FHIRDiagnosticReportImage[]|ResourceComponentCollection */
    protected $image;

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct();
        $this->requestDetail = new ResourceCollection();
        $this->specimen = new ResourceCollection();
        $this->result = new ResourceCollection();
        $this->imagingStudy = new ResourceCollection();
        $this->codedDiagnosis = new ElementCollection();
        $this->presentedForm = new ElementCollection();
        $this->image = new ResourceComponentCollection();
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param FHIRCodeableConcept $name
     */
    public function setName(FHIRCodeableConcept $name)
    {
        $this->name = $name;
    }

    /**
     * @return FHIRCode
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param FHIRCode $status
     */
    public function setStatus(FHIRCode $status)
    {
        $this->status = $status;
    }

    /**
     * @return FHIRDateTime
     */
    public function getIssued()
    {
        return $this->issued;
    }

    /**
     * @param FHIRDateTime $issued
     */
    public function setIssued(FHIRDateTime $issued)
    {
        $this->issued = $issued;
    }

    /**
     * @return FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * @param FHIRDevice|FHIRGroup|FHIRLocation|FHIRPatient $subject
     */
    public function setSubject($subject)
    {
        if ($subject instanceof FHIRDevice ||
            $subject instanceof FHIRGroup ||
            $subject instanceof FHIRLocation ||
            $subject instanceof FHIRPatient)
        {
            $this->subject = $subject;
        }
        else
        {
            throw $this->createInvalidPropertyValueTypeException(
                'subject',
                'FHIRDevice, FHIRQuestionnaireGroup, FHIRConditionLocation, or FHIRPatient',
                $subject);
        }
    }

    /**
     * @return FHIROrganization|FHIRPractitioner
     */
    public function getPerformer()
    {
        return $this->performer;
    }

    /**
     * @param FHIROrganization|FHIRPractitioner $performer
     */
    public function setPerformer($performer)
    {
        if ($performer instanceof FHIROrganization || $performer instanceof FHIRPractitioner)
            $this->performer = $performer;
        else
            throw $this->createInvalidPropertyValueTypeException('performer', 'FHIROrganization or FHIRPractitioner', $performer);
    }

    /**
     * @return ResourceCollection|FHIRDiagnosticOrder[]
     */
    public function getRequestDetail()
    {
        return $this->requestDetail;
    }

    /**
     * @param FHIRDiagnosticOrder $requestDetail
     */
    public function addRequestDetail(FHIRDiagnosticOrder $requestDetail)
    {
        $this->requestDetail->append($requestDetail);
    }

    /**
     * @return FHIRCodeableConcept
     */
    public function getServiceCategory()
    {
        return $this->serviceCategory;
    }

    /**
     * @param FHIRCodeableConcept $serviceCategory
     */
    public function setServiceCategory(FHIRCodeableConcept $serviceCategory)
    {
        $this->serviceCategory = $serviceCategory;
    }

    /**
     * @return FHIRDateTime|FHIRPeriod
     */
    public function getDiagnostic()
    {
        return $this->diagnostic;
    }

    /**
     * @param FHIRDateTime|FHIRPeriod $diagnostic
     */
    public function setDiagnostic($diagnostic)
    {
        if ($diagnostic instanceof FHIRDateTime || $diagnostic instanceof FHIRPeriod)
            $this->diagnostic = $diagnostic;
        else
            throw $this->createInvalidPropertyValueTypeException('diagnostic', 'FHIRDateTime or FHIRPeriod', $diagnostic);
    }

    /**
     * @return ResourceCollection|FHIRSpecimen[]
     */
    public function getSpecimen()
    {
        return $this->specimen;
    }

    /**
     * @param FHIRSpecimen $specimen
     */
    public function addSpecimen(FHIRSpecimen $specimen)
    {
        $this->specimen->append($specimen);
    }

    /**
     * @return FHIRObservation[]|ResourceCollection
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param FHIRObservation $result
     */
    public function addResult(FHIRObservation $result)
    {
        $this->result->append($result);
    }

    /**
     * @return FHIRImagingStudy[]|ResourceCollection
     */
    public function getImagingStudy()
    {
        return $this->imagingStudy;
    }

    /**
     * @param FHIRImagingStudy $imagingStudy
     */
    public function addImagingStudy(FHIRImagingStudy $imagingStudy)
    {
        $this->imagingStudy->append($imagingStudy);
    }

    /**
     * @return FHIRString
     */
    public function getConclusion()
    {
        return $this->conclusion;
    }

    /**
     * @param FHIRString $conclusion
     */
    public function setConclusion(FHIRString $conclusion)
    {
        $this->conclusion = $conclusion;
    }

    /**
     * @return ElementCollection|FHIRCodeableConcept[]
     */
    public function getCodedDiagnosis()
    {
        return $this->codedDiagnosis;
    }

    /**
     * @param FHIRCodeableConcept $codedDiagnosis
     */
    public function addCodedDiagnosis(FHIRCodeableConcept $codedDiagnosis)
    {
        $this->codedDiagnosis->append($codedDiagnosis);
    }

    /**
     * @return ElementCollection|FHIRAttachment[]
     */
    public function getPresentedForm()
    {
        return $this->presentedForm;
    }

    /**
     * @param FHIRAttachment $presentedForm
     */
    public function addPresentedForm(FHIRAttachment $presentedForm)
    {
        $this->presentedForm->append($presentedForm);
    }

    /**
     * @return ResourceComponentCollection|FHIRDiagnosticReportImage[]
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param FHIRDiagnosticReportImage $image
     */
    public function addImage(FHIRDiagnosticReportImage $image)
    {
        $this->image->append($image);
    }
}