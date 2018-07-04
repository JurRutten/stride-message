<?php 

namespace EGOL\Stride;

use EGOL\Stride\Content;

class Content implements \JsonSerializable
{
    protected $data;

    public function add(Message $message)
    {
        $this->data[] = $message;
    }

    protected function messages()
    {
        $messages = array();
        foreach ($this->data as $data) {
            $messages[] = $data->get();
        }

        return $messages;
    }

    public function jsonSerialize()
    {
        return array(
            "version" => 1,
            "type" =>"doc",
            "content" => array(
                array(
                    "type" => "paragraph",
                    "content" => $this->messages()
                )
            )
        );
    }
}