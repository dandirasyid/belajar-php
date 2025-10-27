<?php

use Data\Cat;

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/Validation.php";

$loginRequest = new LoginRequest();
// $loginRequest->username = "";
// $loginRequest->password = "";

try {
    validateLoginRequest($loginRequest);
    echo "Selamat Anda Berhasil Login" . PHP_EOL;
} catch (ValidationException | Exception $exception) {
    echo "Error : {$exception->getMessage()}" . PHP_EOL;
    echo $exception->getTraceAsString() . PHP_EOL;
} finally {
    echo "Berhasil atau Tidak, maka Tetap Akan Muncul" . PHP_EOL;
}
