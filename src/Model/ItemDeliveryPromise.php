<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Promised delivery information for the item.
 */
class ItemDeliveryPromise extends AbstractModel
{
    /**
     * The date and time of the start of the promised delivery window, in ISO 8601
     * format.
     *
     * @var string
     */
    public $startTime = null;

    /**
     * The date and time of the end of the promised delivery window, in ISO 8601
     * format.
     *
     * @var string
     */
    public $endTime = null;
}
