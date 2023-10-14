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

    /**
     * employeeID getter
     *
     * @return integer
     */
    public function getEmployeeID() :int{
        return $this->employeeID;
    }

    /**
     * salary getter
     *
     * @return float
     */
    public function getSalary() :float{
        return $this->salary;
    }

    /**
     * nameを返す
     *
     * @return string
     */
    public function __toString():string{
        return $this->getName();
    }
}