<?php
namespace TRex\Json;

use Throwable;

class JsonException extends \JsonException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct(
            json_last_error_msg(),
            json_last_error(),
            $previous
        );
    }
}
