<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * The shipping address for the service job.
 */
class Address extends AbstractModel
{
    /**
     * The name of the person, business, or institution.
     *
     * @var string
     */
    public $name = null;

    /**
     * The first line of the address.
     *
     * @var string
     */
    public $addressLine1 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine2 = null;

    /**
     * Additional address information, if required.
     *
     * @var string
     */
    public $addressLine3 = null;

    /**
     * The city.
     *
     * @var string
     */
    public $city = null;

    /**
     * The county.
     *
     * @var string
     */
    public $county = null;

    /**
     * The district.
     *
     * @var string
     */
    public $district = null;

    /**
     * The state or region.
     *
     * @var string
     */
    public $stateOrRegion = null;

    /**
     * The postal code. This can contain letters, digits, spaces, and/or punctuation.
     *
     * @var string
     */
    public $postalCode = null;

    /**
     * The two digit country code, in ISO 3166-1 alpha-2 format.
     *
     * @var string
     */
    public $countryCode = null;

    /**
     * The phone number.
     *
     * @var string
     */
    public $phone = null;
}
