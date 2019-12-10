<?php
require_once 'firebaseLib.php';
//firebase url
$url = $_GET['ref'];
// firebase auth
$token = $_GET['auth'];
//firebase data
$data = $_GET['data'];
// strukture

//create array for json
$dataset = array(
                    'data' => $data,
                    'waktu' => getDatetimeNow()
                );

$firebasePath = $_GET['path'];;
// call new
$fire = new fireBase($url, $token);

$res = $fire->push($firebasePath, $dataset);

sleep(0.1);

function getDatetimeNow() {
    $tz_object = new DateTimeZone('Asia/Jakarta');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}