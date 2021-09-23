<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The scope of work for the order.
 */
class ScopeOfWork extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of the service job.
     *
     * @var string
     */
    public $asin = null;

    /**
     * The title of the service job.
     *
     * @var string
     */
    public $title = null;

    /**
     * The number of service jobs.
     *
     * @var int
     */
    public $quantity = null;

    /**
     * A list of skills required to perform the job.
     *
     * @var string[]
     */
    public $requiredSkills = null;
}
