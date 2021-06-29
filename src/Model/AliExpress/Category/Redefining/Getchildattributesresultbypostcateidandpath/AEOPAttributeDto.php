<?php

namespace RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath;

use JMS\Serializer\Annotation as JMS;

class AEOPAttributeDto
{
    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("id")
     */
    public int $id;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("attribute_show_type_value")
     */
    public string $attributeShowTypeValue;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("customized_name")
     */
    public bool $customizedName;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("customized_pic")
     */
    public bool $customizedPic;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("required")
     */
    public bool $required;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("s")
     */
    public bool $sss;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("features")
     */
    private string $features;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("input_type")
     */
    public string $inputType;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("key_attribute")
     */
    public bool $keyAttribute;

    /**
     * @JMS\Type("string")
     * @JMS\SerializedName("names")
     */
    private string $names;

    /**
     * @JMS\Type("int")
     * @JMS\SerializedName("spec")
     */
    public int $spec;

    /**
     * @JMS\Type("array<>")
     * @JMS\SerializedName("values")
     * @JMS\Accessor(setter="setValues")
     */
    private array $values;

    public function getFeatures(): array
    {
        return json_decode($this->features, true);
    }
    public function getNames(): array
    {
        return json_decode($this->names, true);
    }

    public function setValues(array $values): void
    {
        $values = $values['aeop_attr_value_dto'];
        array_walk($values, function (&$row) {
            $row['names'] = json_decode($row['names'], true);
            if (!empty($row['value_tags'])) {
                $row['value_tags'] = json_decode($row['value_tags'], true);
            }
        });
        $this->values = $values;
    }
}
