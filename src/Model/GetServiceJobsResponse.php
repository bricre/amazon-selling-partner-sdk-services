<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema for GetJobs operation.
 */
class GetServiceJobsResponse extends AbstractModel
{
    /**
     * The payload for the GetJobs operation.
     *
     * @var \Amz\Services\Model\JobListing
     */
    public $payload = null;

    /**
     * An unexpected condition occurred during the GetServiceJobs operation.
     *
     * @var \Amz\Services\Model\ErrorList
     */
    public $errors = null;
}
