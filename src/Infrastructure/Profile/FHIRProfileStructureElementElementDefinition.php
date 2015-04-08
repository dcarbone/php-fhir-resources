<?php namespace FHIR\Resources\Infrastructure\Profile;

use FHIR\Common\AbstractFHIRObject;
use FHIR\Common\Collection\ElementCollection;
use FHIR\Common\Collection\ResourceComponentCollection;
use FHIR\Elements\Primitive\FHIRBoolean;
use FHIR\Elements\Primitive\FHIRInteger;
use FHIR\Elements\Primitive\FHIRString;
use FHIR\Elements\Simple\FHIRId;

/**
 * Class FHIRProfileStructureElementElementDefinition
 * @package FHIR\Resources\Infrastructure\Profile
 */
class FHIRProfileStructureElementElementDefinition extends AbstractFHIRObject
{
    /** @var FHIRString */
    protected $short = null;

    /** @var FHIRString */
    protected $formal = null;

    /** @var FHIRString */
    protected $comments = null;

    /** @var FHIRString */
    protected $requirements = null;

    /** @var FHIRString[]|ElementCollection */
    protected $synonym;

    /** @var FHIRInteger */
    protected $min = null;

    /** @var FHIRString */
    protected $max = null;

    /** @var FHIRString */
    protected $nameReference = null;

    /** @var mixed */
    protected $value = null;

    /** @var mixed */
    protected $example = null;

    /** @var FHIRInteger */
    protected $maxLength = null;

    /** @var FHIRId[]|ElementCollection */
    protected $condition;

    /** @var FHIRBoolean */
    protected $mustSupport = null;

    /** @var FHIRBoolean */
    protected $isModifier = null;

    /** @var FHIRProfileStructureElementElementDefinitionTypeRef[]|ResourceComponentCollection */
    protected $type = null;

    /** @var FHIRProfileStructureElementElementDefinitionMapping[]|ResourceComponentCollection */
    protected $mapping;

    /** @var FHIRProfileStructureElementElementDefinitionConstraint[]|ResourceComponentCollection */
    protected $constraint;

    /** @var FHIRProfileStructureElementElementDefinitionBinding */
    protected $binding = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->synonym = new ElementCollection();
        $this->condition = new ElementCollection();
        $this->type = new ResourceComponentCollection();
        $this->mapping = new ResourceComponentCollection();
        $this->constraint = new ResourceComponentCollection();
    }

    /**
     * @return FHIRString
     */
    public function getShort()
    {
        return $this->short;
    }

    /**
     * @param FHIRString $short
     */
    public function setShort(FHIRString $short)
    {
        $this->short = $short;
    }

    /**
     * @return FHIRString
     */
    public function getFormal()
    {
        return $this->formal;
    }

    /**
     * @param FHIRString $formal
     */
    public function setFormal(FHIRString $formal)
    {
        $this->formal = $formal;
    }

    /**
     * @return FHIRString
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param FHIRString $comments
     */
    public function setComments(FHIRString $comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return FHIRString
     */
    public function getRequirements()
    {
        return $this->requirements;
    }

    /**
     * @param FHIRString $requirements
     */
    public function setRequirements(FHIRString $requirements)
    {
        $this->requirements = $requirements;
    }

    /**
     * @return ElementCollection|FHIRString[]
     */
    public function getSynonym()
    {
        return $this->synonym;
    }

    /**
     * @param FHIRString $synonym
     */
    public function addSynonym(FHIRString $synonym)
    {
        $this->synonym->append($synonym);
    }

    /**
     * @return FHIRInteger
     */
    public function getMin()
    {
        return $this->min;
    }

    /**
     * @param FHIRInteger $min
     */
    public function setMin(FHIRInteger $min)
    {
        $this->min = $min;
    }

    /**
     * @return FHIRString
     */
    public function getMax()
    {
        return $this->max;
    }

    /**
     * @param FHIRString $max
     */
    public function setMax(FHIRString $max)
    {
        $this->max = $max;
    }

    /**
     * @return FHIRString
     */
    public function getNameReference()
    {
        return $this->nameReference;
    }

    /**
     * @param FHIRString $nameReference
     */
    public function setNameReference(FHIRString $nameReference)
    {
        $this->nameReference = $nameReference;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return mixed
     */
    public function getExample()
    {
        return $this->example;
    }

    /**
     * @param mixed $example
     */
    public function setExample($example)
    {
        $this->example = $example;
    }

    /**
     * @return FHIRInteger
     */
    public function getMaxLength()
    {
        return $this->maxLength;
    }

    /**
     * @param FHIRInteger $maxLength
     */
    public function setMaxLength(FHIRInteger $maxLength)
    {
        $this->maxLength = $maxLength;
    }

    /**
     * @return ElementCollection|FHIRId[]
     */
    public function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param FHIRId $condition
     */
    public function addCondition(FHIRId $condition)
    {
        $this->condition->append($condition);
    }

    /**
     * @return FHIRBoolean
     */
    public function getMustSupport()
    {
        return $this->mustSupport;
    }

    /**
     * @param FHIRBoolean $mustSupport
     */
    public function setMustSupport(FHIRBoolean $mustSupport)
    {
        $this->mustSupport = $mustSupport;
    }

    /**
     * @return FHIRBoolean
     */
    public function getIsModifier()
    {
        return $this->isModifier;
    }

    /**
     * @param FHIRBoolean $isModifier
     */
    public function setIsModifier(FHIRBoolean $isModifier)
    {
        $this->isModifier = $isModifier;
    }

    /**
     * @return FHIRProfileStructureElementElementDefinitionTypeRef[]|ResourceComponentCollection
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param FHIRProfileStructureElementElementDefinitionTypeRef $type
     */
    public function addType(FHIRProfileStructureElementElementDefinitionTypeRef $type)
    {
        $this->type->append($type);
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileStructureElementElementDefinitionMapping[]
     */
    public function getMapping()
    {
        return $this->mapping;
    }

    /**
     * @param FHIRProfileStructureElementElementDefinitionMapping $mapping
     */
    public function addMapping(FHIRProfileStructureElementElementDefinitionMapping $mapping)
    {
        $this->mapping->append($mapping);
    }

    /**
     * @return ResourceComponentCollection|FHIRProfileStructureElementElementDefinitionConstraint[]
     */
    public function getConstraint()
    {
        return $this->constraint;
    }

    /**
     * @param FHIRProfileStructureElementElementDefinitionConstraint $constraint
     */
    public function addConstraint(FHIRProfileStructureElementElementDefinitionConstraint $constraint)
    {
        $this->constraint->append($constraint);
    }

    /**
     * @return FHIRProfileStructureElementElementDefinitionBinding
     */
    public function getBinding()
    {
        return $this->binding;
    }

    /**
     * @param FHIRProfileStructureElementElementDefinitionBinding $binding
     */
    public function setBinding(FHIRProfileStructureElementElementDefinitionBinding $binding)
    {
        $this->binding = $binding;
    }
}