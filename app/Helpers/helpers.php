<?php

use Carbon\Carbon;

if(!function_exists('money_format')){
    function moneyFormat($str){
        return 'Rp. ' . number_format($str, '0', '', '.');
    }
}

if(!function_exists('dateID')){
    function dateID($tanggal){
        return Carbon::parse($tanggal)->locale('id')->translate('l, d F Y');;
    }
}
