<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The response schema for the GetServiceJobByServiceJobId operation.
 */
class GetServiceJobByServiceJobIdResponse extends AbstractModel
{
    /**
     * The payload for the GetServiceJobByServiceJobId operation.
     *
     * @var \Amz\Services\Model\ServiceJob
     */
    public $payload = null;

    /**
     * An unexpected condition occurred during the GetServiceJobByServiceJobId
     * operation.
     *
     * @var \Amz\Services\Model\ErrorList
     */
    public $errors = null;
}
