<?php 


namespace Sjayamal\Onepaylk;

class IPGetter
{
    public static function getIPAddress()
    {
        return $_SERVER['REMOTE_ADDR'];
    }
}

 ?>