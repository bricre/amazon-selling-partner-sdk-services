<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema for CancelServiceJobByServiceJobId operation.
 */
class CancelServiceJobByServiceJobIdResponse extends AbstractModel
{
    /**
     * Encountered errors for the CancelServiceJobByServiceJobId operation.
     *
     * @var \Amz\Services\Model\ErrorList
     */
    public $errors = null;
}
