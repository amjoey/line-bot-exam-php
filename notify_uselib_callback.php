<?php
session_start();
require_once("LineNotifyLib.php");
 
define('LINE_NOTIFY_CLIENT_ID','FxeUZIhyjwq5UwhchH2hmY');
define('LINE_NOTIFY_CLIENT_SECRET','hfM5fHxNxQESGFEdrhdjX2DpSgcOZnsogMeGZ2858GE');
define('LINE_NOTIFY_CALLBACK_URL','https://petchmee.herokuapp.com/notify_uselib_callback.php');
 
$LineNotify = new LineNotifyLib(
    LINE_NOTIFY_CLIENT_ID, LINE_NOTIFY_CLIENT_SECRET, LINE_NOTIFY_CALLBACK_URL);
     
$accToken = $LineNotify->requestAccessToken($_GET);
if(isset($accToken) && is_string($accToken)){
    $_SESSION['ses_accToken_val'] = $accToken;
}
header("Location:notify_uselib.php");
?>
