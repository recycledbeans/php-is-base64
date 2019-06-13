<?php

if (!function_exists('is_base64')) {

    /**
     * @param $data
     * @return bool
     */
    function is_base64($data) 
    {
        return base64_encode(base64_decode($data, true)) === $data;
    }

}

if (!function_exists('is_base64_encode')) {

    /**
     * @param $data
     * @return string
     */
    function is_base64_encode($data) 
    {
        return is_base64($data) ? $data : base64_encode($data);
    }

}

if (!function_exists('is_base64_decode')) {

    /**
     * @param $data
     * @return bool|string
     */
    function is_base64_decode($data) 
    {
        return is_base64($data) ? base64_decode($data) : $data;
    }

}