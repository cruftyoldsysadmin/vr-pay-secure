<?php

spl_autoload_register(function($class) {
    $root = dirname(__DIR__);
    $classFile = $root . '/lib/' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($classFile)) {
        require_once $classFile;
    }
});

// $instanceName is a part of the url where you access your VR pay installation.
// https://{$instanceName}.vr-pay-secure.de
$instanceName = 'YOUR_INSTANCE_NAME';

// $secret is the VR pay secret for the communication between the applications
// if you think someone got your secret, just regenerate it in the VR pay administration
$secret = 'YOUR_SECRET';

$vrpay = new \VRpay\VRpay($instanceName, $secret);

$page = new \VRpay\Models\Request\Page();
try {
    $response = $vrpay->getAll($page);
    var_dump($response);
} catch (\VRpay\VRpayException $e) {
    print $e->getMessage();
}
