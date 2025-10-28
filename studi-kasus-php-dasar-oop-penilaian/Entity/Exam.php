<?php

namespace Entity;

abstract class Exam {
    protected Student $student;
    protected int $score;

    public function __construct(Student $student, int $score) {
        $this->student = $student;
        $this->score = $score;
    }

    abstract function getResult(): string;
}

class TheoryExam extends Exam {
    public function getResult(): string {
        $status = $this->score >= 70 ? "Lulus" : "Tidak Lulus";
        return "(Teori) {$this->student->getName()} - {$this->student->getNim()} : {$this->score} - $status" . PHP_EOL;
    }
}

class PracticeExam extends Exam {
    public function getResult(): string {
        $status = $this->score >= 80 ? "Lulus" : "Tidak Lulus";
        return "(Praktik) {$this->student->getName()} - {$this->student->getNim()} : {$this->score} - $status" . PHP_EOL;
    }
}
