<?php

namespace Amz\Services\Model;

use OpenAPI\Runtime\AbstractModel as AbstractModel;

/**
 * A list of warnings returned in the sucessful execution response of an API
 * request.
 */
class WarningList extends AbstractModel
{
    protected $isRawObject = true;
}
