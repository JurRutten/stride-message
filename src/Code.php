<?php 

namespace EGOL\Stride;

use EGOL\Stride\Contracts\StrideContent;

class Code extends Message
{
    public function __construct($string, $type = "text")
    {
        parent::__construct($string, $type, 'code');
    }

    public function get()
    {
        return array(
            "type" => $this->type,
            "text" => $this->string,
            "marks" => array(
                array("type" => "code")
            )
        );
    }
}