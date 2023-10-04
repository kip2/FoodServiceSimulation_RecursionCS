<?php

require_once __DIR__ . '/../Person.php';

class Employee extends Person {
    private int $employeeID;
    private float $salary;

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address);
        $this->employeeID = $employeeID;
        $this->salary = $salary;

    }
}