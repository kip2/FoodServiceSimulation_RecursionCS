<?php

namespace Persons\Employees;

use Persons\Person;

class Employee extends Person {
    protected int $employeeID;
    protected float $salary;


    public function __construct($name, $age, $address, $employeeID, $salary){
        parent::__construct($name, $age, $address);
        $this->employeeID = $employeeID;
        $this->salary = $salary;

    }

    public function getEmployeeID() {
        return $this->employeeID;
    }

    public function getSalary() {
        return $this->salary;
    }

    // 名前を返す
    public function __toString(){
        return $this->getName();
    }
}