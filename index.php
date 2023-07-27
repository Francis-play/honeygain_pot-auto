<?php
DEFINE('auth', 'authorization: Bearer ');

$token = ""; //set here you bearer token from honeygain api

function get_url($link,$token){
    $ch = curl_init($link);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_POST, true);
      curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
      curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows NT 10.0; Win64; x32) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/97.0.4758.102 Safari/537.36 Edg/97.0.1108.56");
      curl_setopt($ch, CURLOPT_HTTPHEADER, [
                 auth.$token,
                  'Content-Type: application/json',
                 ]);
    return curl_exec($ch);
    curl_close($ch);
}

echo get_url("https://dashboard.honeygain.com/api/v1/contest_winnings", $token);
