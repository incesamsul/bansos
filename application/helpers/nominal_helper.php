<?php
defined('BASEPATH') or exit('No direct script access allowed');

if (!function_exists('nominal')) {
    function nominal($angka)
    {
        $hasil_rupiah = number_format($angka, 0, ',', '.');
        return $hasil_rupiah;
    }
}
