<?php
namespace TRex\Json;

class Jsonizer
{
    /**
     * @param mixed $data
     * @param int $options
     * @param int $depth
     * @return string
     * @throws JsonEncodingException
     */
    public function encode($data, $options = 0, $depth = 512)
    {
        $json = json_encode($data, $options, $depth);

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new JsonEncodingException($data);
        }

        return $json;
    }

    /**
     * @param string $json
     * @param bool $isArray
     * @param int $depth
     * @param int $options
     * @return array|mixed
     * @throws JsonDecodingException
     */
    public function decode($json, $isArray = true, $options = JSON_BIGINT_AS_STRING, $depth = 512)
    {
        if ($isArray) {
            $data = (array)json_decode($json, true, $depth, $options);
        } else {
            $data = json_decode($json, false, $depth, $options);
        }

        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new JsonDecodingException($json);
        }

        return $data;
    }
}
