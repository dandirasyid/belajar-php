<?php

require_once "exception/ValidationException.php";
require_once "data/LoginRequest.php";
require_once "helper/ValidationUtil.php";

$request = new LoginRequest();
$request->username = "dandi";
$request->password = "rasyid";

ValidationUtil::validateReflection($request);
