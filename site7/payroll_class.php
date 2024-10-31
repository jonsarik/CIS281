<?php
class Payroll {
    private $hoursWorked;
    private $payRate;
    private $lastName;
    private $firstName;
    private $pay;

    function __construct($lastName, $firstName, $hours, $rate) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->hoursWorked = $hours;
        $this->payRate = $rate;
        $this->pay = 0;
    }

    function calcPay() {
        if ($this->hoursWorked <= 40)
            $this->pay = $this->hoursWorked * $this->payRate;
        else {
            $this->pay = $this->payRate * 40;
            $overTime = ($this->hoursWorked - 40) * 1.5 * $this->payRate;
            $this->pay += $overTime;
        }
    }

    function getLastName() {
        return $this->lastName;
    }
    function getFirstName() {
        return $this->firstName;
    }
    function getHoursWorked() {
        return $this->hoursWorked;
    }

    function  getPayRate() {
        return $this->payRate;
    }
    function getPay() {
        return $this->pay;
    }
}
