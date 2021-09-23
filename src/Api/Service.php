<?php

namespace Amz\Services\Api;

use Amz\Services\Model\AddAppointmentRequest as AddAppointmentRequest;
use Amz\Services\Model\CancelServiceJobByServiceJobIdResponse as CancelServiceJobByServiceJobIdResponse;
use Amz\Services\Model\CompleteServiceJobByServiceJobIdResponse as CompleteServiceJobByServiceJobIdResponse;
use Amz\Services\Model\GetServiceJobByServiceJobIdResponse as GetServiceJobByServiceJobIdResponse;
use Amz\Services\Model\GetServiceJobsResponse as GetServiceJobsResponse;
use Amz\Services\Model\RescheduleAppointmentRequest as RescheduleAppointmentRequest;
use Amz\Services\Model\SetAppointmentResponse as SetAppointmentResponse;
use OpenAPI\Runtime\AbstractAPI as AbstractAPI;

class Service extends AbstractAPI
{
    /**
     * Gets service job details for the service job indicated by the service job
     * identifier you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 20 | 40 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $serviceJobId A service job identifier
     *
     * @return GetServiceJobByServiceJobIdResponse
     */
    public function getJobByJobId($serviceJobId): GetServiceJobByServiceJobIdResponse
    {
        return $this->client->request('getServiceJobByServiceJobId', 'GET', "service/v1/serviceJobs/{$serviceJobId}",
            [
            ]
        );
    }

    /**
     * Cancels the service job indicated by the service job identifier you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 20 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $serviceJobId An Amazon defined service job identifier
     * @param array $queries options:
     *                       'cancellationReasonCode'		A cancel reason code that specifies the reason for
     *                       cancelling a service job
     *
     * @return CancelServiceJobByServiceJobIdResponse
     */
    public function cancelJobByJobId($serviceJobId, array $queries = []): CancelServiceJobByServiceJobIdResponse
    {
        return $this->client->request('cancelServiceJobByServiceJobId', 'PUT', "service/v1/serviceJobs/{$serviceJobId}/cancellations",
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Completes the service job indicated by the service job identifier you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 20 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $serviceJobId An Amazon defined service job identifier
     *
     * @return CompleteServiceJobByServiceJobIdResponse
     */
    public function completeJobByJobId($serviceJobId): CompleteServiceJobByServiceJobIdResponse
    {
        return $this->client->request('completeServiceJobByServiceJobId', 'PUT', "service/v1/serviceJobs/{$serviceJobId}/completions",
            [
            ]
        );
    }

    /**
     * Gets service job details for the specified filter query.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 10 | 40 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param array $queries options:
     *                       'serviceOrderIds'		List of service order ids for the query you want to
     *                       perform.Max values supported 20.
     *                       'serviceJobStatus'		A list of one or more job status by which to filter the list
     *                       of jobs.
     *                       'pageToken'		String returned in the response of your previous request.
     *                       'pageSize'		A non-negative integer that indicates the maximum number of jobs to
     *                       return in the list, Value must be 1 - 20. Default 20.
     *                       'createdAfter'		A date used for selecting jobs created after (or at) a specified
     *                       time must be in ISO 8601 format. Required if LastUpdatedAfter is not
     *                       specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error.
     *                       'createdBefore'		A date used for selecting jobs created before (or at) a
     *                       specified time must be in ISO 8601 format.
     *                       'lastUpdatedAfter'		A date used for selecting jobs updated after (or at) a
     *                       specified time must be in ISO 8601 format. Required if createdAfter is not
     *                       specified.Specifying both CreatedAfter and LastUpdatedAfter returns an error.
     *                       'lastUpdatedBefore'		A date used for selecting jobs updated before (or at) a
     *                       specified time must be in ISO 8601 format.
     *                       'scheduleStartDate'		A date used for filtering jobs schedule after (or at) a
     *                       specified time must be in ISO 8601 format. schedule end date should not be
     *                       earlier than schedule start date.
     *                       'scheduleEndDate'		A date used for filtering jobs schedule before (or at) a
     *                       specified time must be in ISO 8601 format. schedule end date should not be
     *                       earlier than schedule start date.
     *                       'marketplaceIds'		Used to select jobs that were placed in the specified
     *                       marketplaces.
     *
     * @return GetServiceJobsResponse
     */
    public function getJobs(array $queries = []): GetServiceJobsResponse
    {
        return $this->client->request('getServiceJobs', 'GET', 'service/v1/serviceJobs',
            [
                'query' => $queries,
            ]
        );
    }

    /**
     * Adds an appointment to the service job indicated by the service job identifier
     * you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 20 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $serviceJobId An Amazon defined service job identifier
     * @param AddAppointmentRequest $Model Adds an appointment to the service job
     *                                     indicated by the service job identifier you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 20 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return SetAppointmentResponse
     */
    public function addAppointmentForJobByJobId($serviceJobId, AddAppointmentRequest $Model): SetAppointmentResponse
    {
        return $this->client->request('addAppointmentForServiceJobByServiceJobId', 'POST', "service/v1/serviceJobs/{$serviceJobId}/appointments",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }

    /**
     * Reschedules an appointment for the service job indicated by the service job
     * identifier you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 20 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @param $serviceJobId An Amazon defined service job identifier
     * @param $appointmentId An existing appointment identifier for the Service Job
     * @param RescheduleAppointmentRequest $Model Reschedules an appointment for the
     *                                            service job indicated by the service job identifier you specify.
     *
     * **Usage Plan:**
     *
     * | Rate (requests per second) | Burst |
     * | ---- | ---- |
     * | 5 | 20 |
     *
     * For more information, see "Usage Plans and Rate Limits" in the Selling Partner
     * API documentation.
     *
     * @return SetAppointmentResponse
     */
    public function rescheduleAppointmentForJobByJobId($serviceJobId, $appointmentId, RescheduleAppointmentRequest $Model): SetAppointmentResponse
    {
        return $this->client->request('rescheduleAppointmentForServiceJobByServiceJobId', 'POST', "service/v1/serviceJobs/{$serviceJobId}/appointments/{$appointmentId}",
            [
                'json' => $Model->getArrayCopy(),
            ]
        );
    }
}
