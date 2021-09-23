<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about an item associated with the service job.
 */
class AssociatedItem extends AbstractModel
{
    /**
     * The Amazon Standard Identification Number (ASIN) of the item.
     *
     * @var string
     */
    public $asin = null;

    /**
     * The title of the item.
     *
     * @var string
     */
    public $title = null;

    /**
     * The total number of items included in the order.
     *
     * @var int
     */
    public $quantity = null;

    /**
     * The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     *
     * @var \Amz\Services\Model\OrderId
     */
    public $orderId = null;

    /**
     * The status of the item.
     *
     * @var string
     */
    public $itemStatus = null;

    /**
     * The brand name of the item.
     *
     * @var string
     */
    public $brandName = null;

    /**
     * Delivery information for the item.
     *
     * @var \Amz\Services\Model\ItemDelivery
     */
    public $itemDelivery = null;
}
