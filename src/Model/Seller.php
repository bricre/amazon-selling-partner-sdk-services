<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the seller of the service job.
 */
class Seller extends AbstractModel
{
    /**
     * The identifier of the seller of the service job.
     *
     * @var string
     */
    public $sellerId = null;
}
