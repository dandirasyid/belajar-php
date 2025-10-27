<?php

function validateLoginRequest(LoginRequest $request) {
    if (!isset($request->username)) {
        throw new ValidationException("Username belum di definisikan")  . PHP_EOL;
    } else if (!isset($request->password)) {
        throw new ValidationException("Password belum di definisikan")  . PHP_EOL;
    } else if (trim($request->username) == "") {
        throw new Exception("Username tidak boleh kosong") . PHP_EOL;
    } else if (trim($request->password) == "") {
        throw new Exception("Password tidak boleh kosong") . PHP_EOL;
    }
}
