<?php

namespace Persons;

abstract class Person {
    protected string $name;
    protected int $age;
    protected string $address;

    public function __construct($name, $age, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
    }

    /**
     * name getter
     *
     * @return string
     */
    public function getName() :string{
        return $this->name;
    }

    /**
     * age getter
     *
     * @return integer
     */
    public function getAge() :int{
        return $this->age;
    }

    /**
     * address getter
     *
     * @return string
     */
    public function getAddress():string {
        return $this->address;
    }
}