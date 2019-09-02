<?php

define('CLIENT_ID', 'FxeUZIhyjwq5UwhchH2hmY');
define('CLIENT_SECRET', 'hfM5fHxNxQESGFEdrhdjX2DpSgcOZnsogMeGZ2858GE');
define('LINE_API_URI', 'https://notify-bot.line.me/oauth/token');
define('CALLBACK_URI', 'https://petchmee.herokuapp.com/callback.php');

parse_str($_SERVER['QUERY_STRING'], $queries);

$fields = [
    'grant_type' => 'authorization_code',
    'code' => $queries['code'],
    'redirect_uri' => CALLBACK_URI,
    'client_id' => CLIENT_ID,
    'client_secret' => CLIENT_SECRET
];

try {
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, LINE_API_URI);
    curl_setopt($ch, CURLOPT_POST, count($fields));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $fields);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

    $res = curl_exec($ch);
    curl_close($ch);

    if ($res == false)
        throw new Exception(curl_error($ch), curl_errno($ch));

    $json = json_decode($res);

   // var_dump($json);
    /*
    if(!is_null($json) && array_key_exists('status',$json)){
          if($json['status']==200){
             echo "access token is: ".$json['access_token']." code is: ".$_GET['state'];
          }
    }
    */
    //echo "access token is: ".$json['access_token']." code is: ".$_GET['state'];
    echo $json['access_token'];
    
} catch(Exception $e) {
    var_dump($e);
}
