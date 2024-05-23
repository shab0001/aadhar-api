<?php

//curl request for generating auth token
$url='https://api.sandbox.co.in/authenticate';

$headers[]='accept: application/json';
$headers[]='x-api-key: key_live_urNPCxHzSAe8TkuFt0mlXLaBrUUedgi3';
$headers[]='x-api-version: 1.0';

$headers[]='x-api-secret: secret_live_u8SUdvlEFgRmRpkCT1197xSKOdshC7cr';


$ch = curl_init($url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
$result = curl_exec($ch);
echo $result; // you  Copy the output for the Token
   $access_token ='eyJhbGciOiJIUzUxMiJ9.eyJhdWQiOiJBUEkiLCJyZWZyZXNoX3Rva2VuIjoiZXlKaGJHY2lPaUpJVXpVeE1pSjkuZXlKaGRXUWlPaUpCVUVraUxDSnpkV0lpT2lKemVXVmtOREkwTXpNM1lXSmlZWE5BWjIxaGFXd3VZMjl0SWl3aVlYQnBYMnRsZVNJNkltdGxlVjlzYVhabFgzVnlUbEJEZUVoNlUwRmxPRlJyZFVaME1HMXNXRXhoUW5KVlZXVmtaMmt6SWl3aWFYTnpJam9pWVhCcExuTmhibVJpYjNndVkyOHVhVzRpTENKbGVIQWlPakUzTkRnd01EVXlNelFzSW1sdWRHVnVkQ0k2SWxKRlJsSkZVMGhmVkU5TFJVNGlMQ0pwWVhRaU9qRTNNVFkwTmpreU16UjkuQXdBMFRxVjJvbFljYm5fUzR4U3J1TFMyR1M1Q3RuY0J3dFktcXhTcGt6NjlWXzk5dFl1XzUzQ1NFbV9QNFdXSUd1dlpzYUlPZ09ycU5BQTlXWk85RVEiLCJzdWIiOiJzeWVkNDI0MzM3YWJiYXNAZ21haWwuY29tIiwiYXBpX2tleSI6ImtleV9saXZlX3VyTlBDeEh6U0FlOFRrdUZ0MG1sWExhQnJVVWVkZ2kzIiwiaXNzIjoiYXBpLnNhbmRib3guY28uaW4iLCJleHAiOjE3MTY1NTU2MzQsImludGVudCI6IkFDQ0VTU19UT0tFTiIsImlhdCI6MTcxNjQ2OTIzNH0._nCWFlVnNf7T8bveFTEK0WXauQhqZ2-7leNSDQYG-YAdOJ-i07uB49ffBPkIMbl2nPUICZYZ_hzlVePA1wQpKA';
