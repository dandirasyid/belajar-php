<?php

require_once "helper/MathHelper.php";

use Helper\MathHelper;

echo MathHelper::$name . PHP_EOL;

MathHelper::$name = "Dandi Rasyid";

echo MathHelper::$name . PHP_EOL;

$result = MathHelper::sum(10, 5, 10, 10, 5, 10);
echo "Result : $result" . PHP_EOL;
