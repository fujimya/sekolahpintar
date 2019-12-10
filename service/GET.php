<?php
require_once 'firebaseLib.php';
//firebase url
    $url = $_GET['ref'];
// firebase auth
    $token = $_GET['auth'];
//firebase data
//$data = $_GET['data'];

//data
    //$data = $_GET['data'];
// strukture
    $firebasePath = $_GET['path'];
// call new
    $fire = new fireBase($url, $token);
    $res = $fire->get($firebasePath);
    echo($res);
    //$parse = json_decode($res);
    //echo ($parse->$data);


// http://localhost/firebase/GET.php?ref=https://rumah-pintar.firebaseio.com/&auth=vLn1Uazto0ecYdtaibOxsvrRVNHC6JELHfNHvXpj&path=/lampu/control/&data=ruang_tengah