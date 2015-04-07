<?php namespace FHIR\Resources\Clinical\DiagnosticReport;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Resources\Infrastructure\FHIRMedia;

/**
 * Class FHIRDiagnosticReportImage
 * @package FHIR\Resources\Clinical\DiagnosticReport
 */
class FHIRDiagnosticReportImage extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $comment = null;

    /** @var FHIRMedia */
    protected $link = null;

    /**
     * @return FHIRString
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param FHIRString $comment
     */
    public function setComment(FHIRString $comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return FHIRMedia
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param FHIRMedia $link
     */
    public function setLink(FHIRMedia $link)
    {
        $this->link = $link;
    }
}