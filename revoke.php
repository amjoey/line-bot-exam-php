<?php
//define('ACCESS_TOKEN', '0835v8bNaH6nlDvguzOtivAGAga1MzsJa1mzphasIxw');
define('LINE_API_URI', 'https://notify-api.line.me/api/revoke');
$headers = [
    //'Authorization: Bearer ' . ACCESS_TOKEN
    'Authorization: Bearer ' . $_GET['token']
];

$data = array();

try {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, LINE_API_URI);
	curl_setopt( $ch, CURLOPT_POST, 1);
	curl_setopt( $ch, CURLOPT_POSTFIELDS, http_build_query($data));
	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt( $ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt( $ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
	curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);;
    $res = curl_exec($ch);
    curl_close($ch);
    if ($res == false)
        throw new Exception(curl_error($ch), curl_errno($ch));
    $json = json_decode($res);
  //  $status = $json->status;
  //  var_dump($status);
  // ตรวจสอบข้อมูล ใช้เป็นเงื่อนไขในการทำงาน
	if(!is_null($json) && array_key_exists('status',$json)){
		if($json['status']==200){
			echo "Access token Revoke";
		}
	}
} catch (Exception $e) {
    var_dump($e);
}
