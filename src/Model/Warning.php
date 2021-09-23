<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Warning returned when the request is successful but execution have some
 * important callouts on basis of which API clients should take defined actions.
 */
class Warning extends AbstractModel
{
    /**
     * An warning code that identifies the type of warning that occurred.
     *
     * @var string
     */
    public $code = null;

    /**
     * A message that describes the warning condition in a human-readable form.
     *
     * @var string
     */
    public $message = null;

    /**
     * Additional details that can help the caller understand or address the warning.
     *
     * @var string
     */
    public $details = null;
}
