<?php

namespace RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Model\Request\BaseRequest;
use Symfony\Component\Validator\Constraints as Assert;

class Query extends BaseRequest
{
    /**
     * Leaf category id
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("param1")
     * @Assert\NotBlank()
     */
    public string $param1;

    /**
     * Parent Attribute/value pair path. Optional.
     * Although the majority attribute key/value has only 1 level, some attributes might be located in deeper levels.
     * The format is a list of string, the 1st item defines the 1st level attribute/value pair,
     * the 2nd item defines the 2nd level attribute/value pair and so on.
     * The format of each item inside the list is “=”. Use comma(“,”) to separate the items in the list.
     *
     * @example 10=360898,100001002=360903
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("param2")
     */
    public ?string $param2 = null;

    /**
     * Locale indicating
     *
     * @example en_US
     *
     * @JMS\Type("string")
     * @JMS\SerializedName("locale")
     */
    public string $locale;

    public function getMethod(): string
    {
        return 'aliexpress.category.redefining.getchildattributesresultbypostcateidandpath';
    }

    public function getExpectedResponse(): string
    {
        return Response::class;
    }
}
