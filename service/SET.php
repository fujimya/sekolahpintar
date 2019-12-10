<?php
require_once 'firebaseLib.php';
//firebase url
$url = $_GET['ref'];
// firebase auth
$token = $_GET['auth'];
//firebase data
$data = $_GET['data'];
// strukture
$firebasePath = $_GET['path'];;
// call new
$fire = new fireBase($url, $token);
$res = $fire->set($firebasePath, $data);

sleep(0.1);