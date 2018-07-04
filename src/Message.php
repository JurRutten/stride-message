<?php 

namespace EGOL\Stride;

use EGOL\Stride\Contracts\MessageContract;

abstract class Message implements MessageContract
{
    protected $type;
    protected $text;
    protected $marks;

    public function __construct($string, $type = "text", $marks = '')
    {
        $this->string = $string;
        $this->type = $type;
        $this->marks = $marks;
    }
}