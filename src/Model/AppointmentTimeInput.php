<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The input appointment time details.
 */
class AppointmentTimeInput extends AbstractModel
{
    /**
     * The date, time in UTC for the start time of an appointment in ISO 8601 format.
     *
     * @var string
     */
    public $startTime = null;

    /**
     * The duration of an appointment in minutes.
     *
     * @var int
     */
    public $durationInMinutes = null;
}
