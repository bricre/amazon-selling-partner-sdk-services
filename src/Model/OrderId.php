<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
 */
class OrderId extends AbstractModel
{
    protected $isRawObject = true;
}
