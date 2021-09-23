<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A technician who is assigned to perform the service job in part or in full.
 */
class Technician extends AbstractModel
{
    /**
     * The technician identifier.
     *
     * @var string
     */
    public $technicianId = null;

    /**
     * The name of the technician.
     *
     * @var string
     */
    public $name = null;
}
