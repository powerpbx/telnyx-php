<?php

namespace Telnyx;

/**
 * Class CdrRequestsV1
 *
 * @package Telnyx
 */
class CdrRequestV1 extends ApiResourceV1
{

    const OBJECT_NAME = "reporting/cdr_request";

    use ApiOperations\All;
    use ApiOperations\Create;
    use ApiOperations\Delete;
    use ApiOperations\Retrieve;
    use ApiOperations\Update;

}
