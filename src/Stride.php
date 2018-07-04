<?php

namespace EGOL\Stride;

use EGOL\Stride\Content;
use Guzzle\Http\Client;

class Stride
{
    protected $bearer;
    protected $url;
    protected $http;

    public function __construct($bearer, $url)
    {
        $this->bearer = $bearer;
        $this->url = $url;
    }

    public function send(Content $content)
    {
        $ch = curl_init($this->url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            'Authorization: Bearer ' . $this->bearer,
            'Content-Type: application/json'
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        return $response;
    }
}