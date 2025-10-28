<?php

namespace Entity;

abstract class Employee {
    protected string $name;
    protected int $baseSalary;

    public function __construct(string $name, int $baseSalary) {
        $this->name = $name;
        $this->baseSalary = $baseSalary;
    }

    abstract function getSalary(): int;

    public function getName(): string {
        return $this->name;
    }
}

class PermanentEmployee extends Employee {
    private int $bonus;
    public function __construct(string $name, int $baseSalary, int $bonus) {
        parent::__construct($name, $baseSalary);
        $this->bonus = $bonus;
    }

    public function getSalary(): int {
        return $this->baseSalary + $this->bonus;
    }
}

class ContractEmployee extends Employee {
    private int $dailyRate;
    private int $workDays;

    public function __construct(string $name, int $dailyRate, int $workDays) {
        parent::__construct($name, 0);
        $this->dailyRate = $dailyRate;
        $this->workDays = $workDays;
    }

    public function getSalary(): int {
        return $this->dailyRate * $this->workDays;
    }
}
