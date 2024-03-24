<?php

// curl request for generating auth token
// $url='https://api.sandbox.co.in/authenticate';

$headers[]='accept: application/json';
$headers[]='x-api-key: key_live_Sx1Su90UVBwfINTozZkEtOGKdJiEN3jf';
$headers[]='x-api-version: 1.0';
            
// $headers[]='x-api-secret: secret_live_7IAEFBxofHBpmDDndebpVs0frTIOBBkR';


// $ch = curl_init($url);
// curl_setopt($ch,CURLOPT_POST,1);
// curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
// curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
// $result = curl_exec($ch);
// echo $result;


$auth_token='eyJhbGciOiJIUzUxMiJ9.eyJhdWQiOiJBUEkiLCJyZWZyZXNoX3Rva2VuIjoiZXlKaGJHY2lPaUpJVXpVeE1pSjkuZXlKaGRXUWlPaUpCVUVraUxDSnpkV0lpT2lKemVXVmtjMmhoWWpReU5qRTRRR2R0WVdsc0xtTnZiU0lzSW1Gd2FWOXJaWGtpT2lKclpYbGZiR2wyWlY5VGVERlRkVGt3VlZaQ2QyWkpUbFJ2ZWxwclJYUlBSMHRrU21sRlRqTnFaaUlzSW1semN5STZJbUZ3YVM1ellXNWtZbTk0TG1OdkxtbHVJaXdpWlhod0lqb3hOelF5T0RFek1UZzNMQ0pwYm5SbGJuUWlPaUpTUlVaU1JWTklYMVJQUzBWT0lpd2lhV0YwSWpveE56RXhNamMzTVRnM2ZRLmJ5dnFsRFBOakJzX1hzZlRPdDlGVmI4RVluNHpoTU9lOVNpRDRNcnJoTmxWUVlXbXRybHFjYkVsQ1kwQUxlU0I4bnhicVpycmkycHJ3NFNVMmwzSWV3Iiwic3ViIjoic3llZHNoYWI0MjYxOEBnbWFpbC5jb20iLCJhcGlfa2V5Ijoia2V5X2xpdmVfU3gxU3U5MFVWQndmSU5Ub3paa0V0T0dLZEppRU4zamYiLCJpc3MiOiJhcGkuc2FuZGJveC5jby5pbiIsImV4cCI6MTcxMTM2MzU4NywiaW50ZW50IjoiQUNDRVNTX1RPS0VOIiwiaWF0IjoxNzExMjc3MTg3fQ.6pum0UXyVmyVzx8O22KpJ2RgLxDe7XKSZO-c9qUz1vkjFvHkGciC0oGjpwsEjOzucQsqvznCI9TKEjqQxLysDA';

if(isset($_GET['sendotp'])){
    $aadharno=$_POST['aadhar_no'];
    $url='https://api.sandbox.co.in/kyc/aadhaar/okyc/otp';

    $data = '{
        "aadhaar_number":"'.$aadharno.'"
    }';

    $headers[]='Authorization :'.$auth_token;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);
    echo $result;
    

}elseif(isset($_GET['verifyotp'])){
    $refid=$_POST['ref_id'];
    $otp=$_POST['otp'];

    $url='https://api.sandbox.co.in/kyc/aadhaar/okyc/otp/verify';

    $data = '{
        "ref_id":"'.$refid.'",
        "otp":"'.$otp.'"

    }';

    $headers[]='Authorization :'.$auth_token;
    $ch = curl_init($url);
    curl_setopt($ch,CURLOPT_POST,1);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch,CURLOPT_HTTPHEADER,$headers);
    $result = curl_exec($ch);
    echo $result;
    
}


