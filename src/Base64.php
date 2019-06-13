<?php

if (!function_exists('is_base64')) {
    function is_base64($data) {
        return base64_encode(base64_decode($data, true)) === $data;
    }
}
