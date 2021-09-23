<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Proof of Appointment (POA) details.
 */
class Poa extends AbstractModel
{
    /**
     * The time of the appointment window.
     *
     * @var \Amz\Services\Model\AppointmentTime
     */
    public $appointmentTime = null;

    /**
     * A list of technicians.
     *
     * @var \Amz\Services\Model\Technician[]
     */
    public $technicians = null;

    /**
     * The identifier of the technician who uploaded the POA.
     *
     * @var string
     */
    public $uploadingTechnician = null;

    /**
     * The date and time when the POA was uploaded, in ISO 8601 format.
     *
     * @var string
     */
    public $uploadTime = null;

    /**
     * The type of POA uploaded.
     *
     * @var string
     */
    public $poaType = null;
}
