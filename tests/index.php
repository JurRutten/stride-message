<?php 

use EGOL\Stride\Code;
use EGOL\Stride\Content;
use EGOL\Stride\Stride;
use EGOL\Stride\Text;

require "../vendor/autoload.php";

$dotenv = new Dotenv\Dotenv(__DIR__ . '/..');
$dotenv->load();

$message = new Stride(getenv('AUTH_BEARER'), getenv('URL'));
$code = new Code('var i = 0; doSomethingWith(i);');
$text = new Text('Hello world');
$collection = new Content;
$collection->add($text);
$collection->add($code);
$message->send($collection);