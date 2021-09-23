<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Response schema for add or reschedule appointment operation.
 */
class SetAppointmentResponse extends AbstractModel
{
    /**
     * New appointment id generated during add or reschedule appointment operation.
     *
     * @var \Amz\Services\Model\AppointmentId
     */
    public $appointmentId = null;

    /**
     * Warnings generated during add or reschedule appointment operation.
     *
     * @var \Amz\Services\Model\WarningList
     */
    public $warnings = null;

    /**
     * Errors occurred during during add or reschedule appointment operation.
     *
     * @var \Amz\Services\Model\ErrorList
     */
    public $errors = null;
}
