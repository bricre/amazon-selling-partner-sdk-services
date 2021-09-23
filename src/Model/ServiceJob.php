<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The job details of a service.
 */
class ServiceJob extends AbstractModel
{
    /**
     * The date and time of the creation of the job, in ISO 8601 format.
     *
     * @var string
     */
    public $createTime = null;

    /**
     * The service job identifier.
     *
     * @var \Amz\Services\Model\ServiceJobId
     */
    public $serviceJobId = null;

    /**
     * The status of the service job.
     *
     * @var string
     */
    public $serviceJobStatus = null;

    /**
     * The scope of work for the order.
     *
     * @var \Amz\Services\Model\ScopeOfWork
     */
    public $scopeOfWork = null;

    /**
     * Information about the seller of the service job.
     *
     * @var \Amz\Services\Model\Seller
     */
    public $seller = null;

    /**
     * Information about the service job provider.
     *
     * @var \Amz\Services\Model\ServiceJobProvider
     */
    public $serviceJobProvider = null;

    /**
     * A list of appointment windows preferred by the buyer. Included only if the buyer
     * selected appointment windows when creating the order.
     *
     * @var \Amz\Services\Model\AppointmentTime[]
     */
    public $preferredAppointmentTimes = null;

    /**
     * A list of appointments.
     *
     * @var \Amz\Services\Model\Appointment[]
     */
    public $appointments = null;

    /**
     * The Amazon-defined identifier for an order placed by the buyer, in 3-7-7 format.
     *
     * @var \Amz\Services\Model\OrderId
     */
    public $serviceOrderId = null;

    /**
     * The marketplace identifier.
     *
     * @var string
     */
    public $marketplaceId = null;

    /**
     * Information about the buyer.
     *
     * @var \Amz\Services\Model\Buyer
     */
    public $buyer = null;

    /**
     * A list of items associated with the service job.
     *
     * @var \Amz\Services\Model\AssociatedItem[]
     */
    public $associatedItems = null;

    /**
     * Information about the location of the service job.
     *
     * @var \Amz\Services\Model\ServiceLocation
     */
    public $serviceLocation = null;
}
