<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The details of an appointment.
 */
class Appointment extends AbstractModel
{
    /**
     * The appointment identifier.
     *
     * @var \Amz\Services\Model\AppointmentId
     */
    public $appointmentId = null;

    /**
     * The status of the appointment.
     *
     * @var string
     */
    public $appointmentStatus = null;

    /**
     * The time of the appointment window.
     *
     * @var \Amz\Services\Model\AppointmentTime
     */
    public $appointmentTime = null;

    /**
     * A list of technicians assigned to the service job.
     *
     * @var \Amz\Services\Model\Technician[]
     */
    public $assignedTechnicians = null;

    /**
     * The identifier of a rescheduled appointment.
     *
     * @var \Amz\Services\Model\AppointmentId
     */
    public $rescheduledAppointmentId = null;

    /**
     * Proof of Appointment (POA) details.
     *
     * @var \Amz\Services\Model\Poa
     */
    public $poa = null;
}
