<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the buyer.
 */
class Buyer extends AbstractModel
{
    /**
     * The identifier of the buyer.
     *
     * @var string
     */
    public $buyerId = null;

    /**
     * The name of the buyer.
     *
     * @var string
     */
    public $name = null;

    /**
     * The phone number of the buyer.
     *
     * @var string
     */
    public $phone = null;

    /**
     * When true, the service is for an Amazon Prime buyer.
     *
     * @var bool
     */
    public $isPrimeMember = null;
}
