<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * Error response returned when the request is unsuccessful.
 */
class Error extends AbstractModel
{
    /**
     * An error code that identifies the type of error that occurred.
     *
     * @var string
     */
    public $code = null;

    /**
     * A message that describes the error condition in a human-readable form.
     *
     * @var string
     */
    public $message = null;

    /**
     * Additional details that can help the caller understand or fix the issue.
     *
     * @var string
     */
    public $details = null;

    /**
     * The type of error.
     *
     * @var string
     */
    public $errorLevel = null;
}
