<?php
require_once __DIR__ . "/../traits/nameAndId.php";
class Image
{
    use NameAndId;
    public $url;
    public $alt;

    function __construct($_url,  $_alt)
    {
        $this->url = $_url;
        $this->alt = $_alt;
    }
}
