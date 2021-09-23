<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The time of the appointment window.
 */
class AppointmentTime extends AbstractModel
{
    /**
     * The date and time of the start of the appointment window, in ISO 8601 format.
     *
     * @var string
     */
    public $startTime = null;

    /**
     * The duration of the appointment window, in minutes.
     *
     * @var int
     */
    public $durationInMinutes = null;
}
