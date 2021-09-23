<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The payload for the GetJobs operation.
 */
class JobListing extends AbstractModel
{
    /**
     * Total result size of the query result.
     *
     * @var int
     */
    public $totalResultSize = null;

    /**
     * A generated string used to pass information to your next request.If
     * nextPageToken is returned, pass the value of nextPageToken to the pageToken to
     * get next results.
     *
     * @var string
     */
    public $nextPageToken = null;

    /**
     * A generated string used to pass information to your next request.If
     * previousPageToken is returned, pass the value of previousPageToken to the
     * pageToken to get previous page results.
     *
     * @var string
     */
    public $previousPageToken = null;

    /**
     * List of job details for the given input.
     *
     * @var \Amz\Services\Model\ServiceJob[]
     */
    public $jobs = null;
}
