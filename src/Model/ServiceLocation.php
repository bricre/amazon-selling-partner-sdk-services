<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the location of the service job.
 */
class ServiceLocation extends AbstractModel
{
    /**
     * The location of the service job.
     *
     * @var string
     */
    public $serviceLocationType = null;

    /**
     * The shipping address for the service job.
     *
     * @var \Amz\Services\Model\Address
     */
    public $address = null;
}
