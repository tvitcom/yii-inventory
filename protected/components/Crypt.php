<?php

/* Crypto class for openssl comandline */

class Crypt {

    private $_salt;

    public static function test($msg = 'Our site use OpenSSL cryptography!') {
        $r = self::enc($msg);
        return "<br>\n<pre>" . $r . " : " . self::dec($r) . "</pre>";
    }

    public static function params($pass, $salt_sixteen) {
        return array($pass, $salt_sixteen, "aes-256-cbc");
    }

    public static function enc($msg, $pass = 'Standart_Password', $salt_sixteen = '0E2A070190F0A750') {
        list ($pass, $iv, $method) = self::params($pass, $salt_sixteen);
        if (function_exists('openssl_encrypt'))
            return urlencode(openssl_encrypt(urlencode($msg), $method, $pass, false, $iv));
        else
            return urlencode(exec("echo \"" . urlencode($msg) . "\" | openssl enc -" . urlencode($method) . " -base64 -nosalt -K " . bin2hex($pass) . " -iv " . bin2hex($iv)));
    }

    public static function dec($msg, $pass = 'Standart_Password', $salt_sixteen = '0E2A070190F0A750') {
        list ($pass, $iv, $method) = self::params($pass, $salt_sixteen);
        if (function_exists('openssl_decrypt'))
            return trim(urldecode(openssl_decrypt(urldecode($msg), $method, $pass, false, $iv)));
        else
            return trim(urldecode(exec("echo \"" . urldecode($msg) . "\" | openssl enc -" . $method . " -d -base64 -nosalt -K " . bin2hex($pass) . " -iv " . bin2hex($iv))));
    }

}
