<?php
namespace TRex\Json;

use Throwable;

class JsonEncodingException extends JsonException
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * DataException constructor.
     * @param mixed $data
     * @param Throwable|null $previous
     */
    public function __construct($data, Throwable $previous = null)
    {
        parent::__construct($previous);
        $this->data = $data;
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        return $this->data;
    }
}
