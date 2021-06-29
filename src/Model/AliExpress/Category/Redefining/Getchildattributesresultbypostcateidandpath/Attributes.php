<?php

namespace RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath;

use JMS\Serializer\Annotation as JMS;

class Attributes
{
    /**
     * @var AEOPAttributeDto[] $categoryInfo
     *
     * @JMS\Type("array<RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath\AEOPAttributeDto>")
     * @JMS\SerializedName("aeop_attribute_dto")
     */
    public array $AEOPAttributeDtos;
}
