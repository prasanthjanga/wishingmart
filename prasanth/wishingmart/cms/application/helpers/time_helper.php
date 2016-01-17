<?php defined('BASEPATH') OR exit('No direct script access allowed');

function time_dmtmi($value)
{
    $time=date("d M g:s a",strtotime($value));
    return $time;
}