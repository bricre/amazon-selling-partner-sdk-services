<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Input for add appointment operation.
 */
class AddAppointmentRequest extends AbstractModel
{
    /**
     * Input appointment time details.
     *
     * @var \Amz\Services\Model\AppointmentTimeInput
     */
    public $appointmentTime = null;
}
