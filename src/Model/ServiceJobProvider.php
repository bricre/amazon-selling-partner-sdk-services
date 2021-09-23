<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Information about the service job provider.
 */
class ServiceJobProvider extends AbstractModel
{
    /**
     * The identifier of the service job provider.
     *
     * @var string
     */
    public $serviceJobProviderId = null;
}
