<?php

use Entity\ContractEmployee;
use Entity\PermanentEmployee;

require_once __DIR__ . "/Entity/Employee.php";

$emp1 = new PermanentEmployee(name: "Dandi Rasyid", baseSalary: 10000000, bonus: 5000000);
$emp2 = new ContractEmployee(name: "Syafira Anindita Maharani", dailyRate: 200000, workDays: 22);

$employees = [$emp1, $emp2];

echo "\n ========== Daftar Gaji Karyawan ========== \n";
foreach ($employees as $key => $value) {
    $no = $key + 1;
    echo "$no. {$value->getName()} - Gaji : Rp. " . number_format($value->getSalary(), 0, ",", ".") . PHP_EOL;
}

echo "============================================ \n";
