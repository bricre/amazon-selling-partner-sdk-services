<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema for CompleteServiceJobByServiceJobId operation.
 */
class CompleteServiceJobByServiceJobIdResponse extends AbstractModel
{
    /**
     * Encountered errors for the CompleteServiceJobByServiceJobId operation.
     *
     * @var \Amz\Services\Model\ErrorList
     */
    public $errors = null;
}
