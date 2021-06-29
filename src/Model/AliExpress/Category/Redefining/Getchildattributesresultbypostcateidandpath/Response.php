<?php

namespace RetailCrm\Model\AliExpress\Category\Redefining\Getchildattributesresultbypostcateidandpath;

use RetailCrm\Model\Response\BaseResponse;
use JMS\Serializer\Annotation as JMS;

class Response extends BaseResponse
{
    /**
     * @JMS\Type(ResponseData::class)
     * @JMS\SerializedName("aliexpress_category_redefining_getchildattributesresultbypostcateidandpath_response")
     */
    public ResponseData $responseData;
}
