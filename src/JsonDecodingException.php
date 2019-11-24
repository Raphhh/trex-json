<?php
namespace TRex\Json;

use Throwable;

class JsonDecodingException extends JsonException
{
    /**
     * @var string
     */
    private $json;

    /**
     * JsonException constructor.
     * @param string $json
     * @param Throwable|null $previous
     */
    public function __construct($json, Throwable $previous = null)
    {
        parent::__construct($previous);
        $this->json = $json;
    }

    /**
     * @return string
     */
    public function getJson()
    {
        return $this->json;
    }
}
