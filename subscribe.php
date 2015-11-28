<?php

$submit_url = "http://us7.api.mailchimp.com/1.3/?method=listSubscribe";
$data = array(
    'email_address'=>$_POST['email'],
    'apikey'=> 'YOUR MC API KEY',
    'id' => 'YOUR MC LIST ID',
    'double_optin' => true,
    'send_welcome' => false,
    'email_type' => 'html'
);

$payload = json_encode($data);
 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $submit_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, urlencode($payload));
 
$result = curl_exec($ch);
curl_close ($ch);

echo $result;
