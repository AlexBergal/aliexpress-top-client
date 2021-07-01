<?php

namespace RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath;

use JMS\Serializer\Annotation as JMS;

class ResponseDataResult
{
    /**
     * @JMS\Type(Attributes::class)
     * @JMS\SerializedName("attributes")
     */
    private ?Attributes $attributes = null;

    /**
     * @JMS\Type("bool")
     * @JMS\SerializedName("success")
     */
    private bool $success;

    /**
     * @return AEOPAttributeDto[]
     */
    public function getAttributes(): ?array
    {
        return $this->attributes ? $this->attributes->AEOPAttributeDtos : [];
    }

    public function isSuccess(): bool
    {
        return $this->success;
    }
}
