<?php
namespace RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath;

use JMS\Serializer\Annotation as JMS;
use RetailCrm\Model\Response\AbstractResponseData;

class ResponseData extends AbstractResponseData
{
    /**
     * @JMS\Type(ResponseDataResult::class)
     * @JMS\SerializedName("result")
     */
    public ResponseDataResult $result;
}
