<?php 

namespace EGOL\Stride;

use EGOL\Stride\Contracts\StrideContent;

class Text extends Message
{
    public function __construct($string, $type = "text")
    {
        parent::__construct($string, $type, '');
    }

    public function get()
    {
        return array(
            "type" => $this->type,
            "text" => $this->string
        );
    }
}