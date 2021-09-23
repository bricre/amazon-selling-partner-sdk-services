<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Delivery information for the item.
 */
class ItemDelivery extends AbstractModel
{
    /**
     * The date and time of the latest Estimated Delivery Date (EDD) of all the items
     * with an EDD. In ISO 8601 format.
     *
     * @var string
     */
    public $estimatedDeliveryDate = null;

    /**
     * Promised delivery information for the item.
     *
     * @var \Amz\Services\Model\ItemDeliveryPromise
     */
    public $itemDeliveryPromise = null;
}
