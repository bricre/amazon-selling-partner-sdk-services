<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Input for rescheduled appointment operation.
 */
class RescheduleAppointmentRequest extends AbstractModel
{
    /**
     * Input appointment time details.
     *
     * @var \Amz\Services\Model\AppointmentTimeInput
     */
    public $appointmentTime = null;

    /**
     * Input appointment reschedule reason.
     *
     * @var \Amz\Services\Model\RescheduleReasonCode
     */
    public $rescheduleReasonCode = null;
}
