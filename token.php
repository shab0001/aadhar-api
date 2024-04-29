<?php

//curl request for generating auth token
$url='https://api.sandbox.co.in/authenticate';

$headers[]='accept: application/json';
$headers[]='x-api-key: key_live_NMWtgqqivdOUbysSaQf6ZiENSfhJUf7Q';
$headers[]='x-api-version: 1.0';

$headers[]='x-api-secret: secret_live_BoiZbWFgTWOrPrzaom8a1DSpgWn8yzHt';


$ch = curl_init($url);
curl_setopt($ch,CURLOPT_POST,1);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
$result = curl_exec($ch);
echo $result; // you  Copy the output for the Token
  $access_token ='eyJhbGciOiJIUzUxMiJ9.eyJhdWQiOiJBUEkiLCJyZWZyZXNoX3Rva2VuIjoiZXlKaGJHY2lPaUpJVXpVeE1pSjkuZXlKaGRXUWlPaUpCVUVraUxDSnpkV0lpT2lKaFpHNWhibk5oYUdGaU1qRXlRR2R0WVdsc0xtTnZiU0lzSW1Gd2FWOXJaWGtpT2lKclpYbGZiR2wyWlY5T1RWZDBaM0Z4YVhaa1QxVmllWE5UWVZGbU5scHBSVTVUWm1oS1ZXWTNVU0lzSW1semN5STZJbUZ3YVM1ellXNWtZbTk0TG1OdkxtbHVJaXdpWlhod0lqb3hOelExT1RRNE9UWTFMQ0pwYm5SbGJuUWlPaUpTUlVaU1JWTklYMVJQUzBWT0lpd2lhV0YwSWpveE56RTBOREV5T1RZMWZRLmJ4R2pHV0VoME5rZlc2YlFBU1lNOTJFYTR6bDZRc19iVFctRzlDMENwYi1FZ3oxYkFtd0MzbkdtU1JtdDEwZ1YtSjluMWgxWTZxNmdobzBZbTdBYVhBIiwic3ViIjoiYWRuYW5zYWhhYjIxMkBnbWFpbC5jb20iLCJhcGlfa2V5Ijoia2V5X2xpdmVfTk1XdGdxcWl2ZE9VYnlzU2FRZjZaaUVOU2ZoSlVmN1EiLCJpc3MiOiJhcGkuc2FuZGJveC5jby5pbiIsImV4cCI6MTcxNDQ5OTM2NSwiaW50ZW50IjoiQUNDRVNTX1RPS0VOIiwiaWF0IjoxNzE0NDEyOTY1fQ.8--nuU547kU19UiGTnkhH2eGSnDPs4swzWFJUPH8s-ndcHl6zYLjflVXYwLKzKZIEHkrccFtOZs_kWmTHbCnIQ';