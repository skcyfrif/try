<?php

require_once 'google_login/vendor/autoload.php';

// init configuration
$clientID = '719259320404-h998art261q67fqbotam1o5pardnkc54.apps.googleusercontent.com'; //'<YOUR_CLIENT_ID>';
$clientSecret = '8fDnBZhCkx_b_ZRqQmnxOKUP'; //'<YOUR_CLIENT_SECRET>';
$redirectUri = 'https://localhost/2021/google_return.php'; //'<REDIRECT_URI>';
// create Client Request to access Google API
$client = new Google_Client();
$client->setClientId($clientID);
$client->setClientSecret($clientSecret);
$client->setRedirectUri($redirectUri);
$client->addScope("email");
$client->addScope("profile");

// authenticate code from Google OAuth Flow
if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);


// get profile info
    $google_oauth = new Google_Service_Oauth2($client);
    $google_account_info = $google_oauth->userinfo->get();
//    echo "<pre>";
//    print_r($google_account_info);
    echo $email = $google_account_info->email;
    echo '<br>';
    echo $name = $google_account_info->name;
    echo '<br>';
    echo '<img src="'.$google_account_info->picture.'">';


// now you can use this profile info to create account in your website and make user logged in.
} else {
    echo "<a href='" . $client->createAuthUrl() . "'>Google Login</a>";
}
?>
