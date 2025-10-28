<?php

use Entity\PracticeExam;
use Entity\Student;
use Entity\TheoryExam;

require_once __DIR__ . "/Entity/Student.php";
require_once __DIR__ . "/Entity/Exam.php";

$student1 = new Student(name: "Dandi Rasyid", nim: 0110221134);

$theoryExam = new TheoryExam($student1, 80);
$practiceExam = new PracticeExam($student1, 70);

echo "\n====== Nilai Ujian Mahasiswa ======\n";
echo "{$theoryExam->getResult()}";
echo "{$practiceExam->getResult()}";
echo "-------------------------------------- \n";
