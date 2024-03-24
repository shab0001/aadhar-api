<?php

//curl request for generating auth token
$url='https://api.sandbox.co.in/authenticate';

$headers[]='accept: application/json';
$headers[]='x-api-key: key_live_Sx1Su90UVBwfINTozZkEtOGKdJiEN3jf';
$headers[]='x-api-version: 1.0';

 $headers[]='x-api-secret: secret_live_7IAEFBxofHBpmDDndebpVs0frTIOBBkR';


$ch = curl_init($url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
$result = curl_exec($ch);
echo $result; // you  Copy the output for the Token
$access_token='eyJhbGciOiJIUzUxMiJ9.eyJhdWQiOiJBUEkiLCJyZWZyZXNoX3Rva2VuIjoiZXlKaGJHY2lPaUpJVXpVeE1pSjkuZXlKaGRXUWlPaUpCVUVraUxDSnpkV0lpT2lKemVXVmtjMmhoWWpReU5qRTRRR2R0WVdsc0xtTnZiU0lzSW1Gd2FWOXJaWGtpT2lKclpYbGZiR2wyWlY5VGVERlRkVGt3VlZaQ2QyWkpUbFJ2ZWxwclJYUlBSMHRrU21sRlRqTnFaaUlzSW1semN5STZJbUZ3YVM1ellXNWtZbTk0TG1OdkxtbHVJaXdpWlhod0lqb3hOelF5T0RJNE5ESXlMQ0pwYm5SbGJuUWlPaUpTUlVaU1JWTklYMVJQUzBWT0lpd2lhV0YwSWpveE56RXhNamt5TkRJeWZRLnItWExpX3JJUDZEZFlZeDk0RVE4RzZOWVlGUks5YW5ZdTR2RHI2YW9uM25jVUpwOTQ4X0Izb0tibjIyb0stTVRmVV9HUUdqNWFHeTJXZXAzOEktRjh3Iiwic3ViIjoic3llZHNoYWI0MjYxOEBnbWFpbC5jb20iLCJhcGlfa2V5Ijoia2V5X2xpdmVfU3gxU3U5MFVWQndmSU5Ub3paa0V0T0dLZEppRU4zamYiLCJpc3MiOiJhcGkuc2FuZGJveC5jby5pbiIsImV4cCI6MTcxMTM3ODgyMiwiaW50ZW50IjoiQUNDRVNTX1RPS0VOIiwiaWF0IjoxNzExMjkyNDIyfQ.beNRT7CIwnfWFUf8IKdLB725nB-B4i0V3C8ytAOw5PpsecsXDwtzspqEeu39L9xpdvw58I1qmI_mxnCLUPXdPA';
