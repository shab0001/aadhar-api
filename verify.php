<?php

// Token
$ch = curl_init();
$url = "http://localhost/aadhaar/token.php";
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resp = curl_exec($ch);
if($e = curl_error($ch)) {
    echo $e;
} else {
    $data = json_decode($resp,true);
    if (isset($data['access_token']))
        $access_token = $data['access_token'];
}
curl_close($ch);

// Verify
$headers[]='accept: application/json';
$headers[]='x-api-key: key_live_urNPCxHzSAe8TkuFt0mlXLaBrUUedgi3';
$headers[]='x-api-version: 1.0';



// Check if the 'aadhar_no' parameter is set in the POST request
if(isset($_POST['aadhar_no'])) {
    // Get the value of 'aadhar_no' from the POST request
    $aadhar_no = $_POST['aadhar_no'];

    // API endpoint URL
    $url = 'https://api.sandbox.co.in/kyc/aadhaar/okyc/otp';

    // Request body
    $data = json_encode(array(
        'aadhaar_number' => $aadhar_no
    ));

    // Request headers
    $headers = array(
        'Authorization: ' . $access_token, 
        'Accept: application/json',
        'Content-Type: application/json',
        'x-api-key: key_live_urNPCxHzSAe8TkuFt0mlXLaBrUUedgi3',
        'x-api-version: 1.0'
    );

    // Initialize cURL session
    $ch = curl_init();

    // Set cURL options
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

    // Execute cURL request
    $response = curl_exec($ch);

    // Check for errors
    if(curl_errno($ch)){
        echo 'Error: ' . curl_error($ch);
    }

    // Close cURL session
    curl_close($ch);

    // Output the response
    echo $response;
} else {
    // If 'aadhar_no' parameter is not set, return an error message
    echo "Error: 'aadhar_no' parameter is not set.";
}
