<?php
$access_token = 'JhcXXi7LxCZ0Hvo3TfYGa/qJJ8ZKg7VCnpNwyioIYa8T/OJ6jAb1oi6EMBI9k8alKX2JcuAKzdcP5/M7DuFrk4s6hIadjt3xw49iIBuQg4OftizwaPswK/kdpTJ6iZTuNTH3FJg0duUrIPcR6q9XLgdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
