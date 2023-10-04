<?php

require_once __DIR__ . '/../Person.php';

class Employee extends Person {
    protected int $employeeID;
    protected float $salary;

    public function getEmployeeID() {
        return $this->employeeID;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address);
        $this->employeeID = $employeeID;
        $this->salary = $salary;

    }

    // 名前を返す
    public function __toString(){
        // return __CLASS__;
        return $this->getName();
    }
}