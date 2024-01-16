<?php
class Image
{
    public $url;
    public $alt;

    function __construct($_url,  $_alt)
    {
        $this->url = $_url;
        $this->alt = $_alt;
    }
}
