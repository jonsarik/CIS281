<?php
// Midterm
// CIS 281: Web Development III/Server Side Programming
// Professor Gustavo Alatta

// Travel Expense Application: Travel Class
// Author:      Jonathan Sarkarati
// Date:        10/25/2024
// Filename:    travelexp.php

class TravelExp {
    private $destination;
    private $last_name;
    private $first_name;
    private $travel_date;
    private $miles;
    private $mpg;
    private $price;

    function __construct($destination, $first_name, $last_name, $travel_date, $miles, $mpg, $price) {
        $this->destination = $destination;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->travel_date = $travel_date;
        $this->miles = $miles;
        $this->mpg = $mpg;
        $this->price = $price;
    }

    public function setValues($destination, $first_name, $last_name, $travel_date, $miles, $mpg, $price) {
        $this->destination = $destination;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->travel_date = $travel_date;
        $this->miles = $miles;
        $this->mpg = $mpg;
        $this->price = $price;
    }

    public function calcExpense() {
        return $this->miles / $this->mpg * $this->price;
    }

    public function getDestination() { return $this->destination; }
    public function getLastName() { return $this->last_name; }
    public function getFirstName() { return $this->first_name; }
    public function getTravelDate() { return $this->travel_date; }
    public function getMiles() { return $this->miles; }
    public function getMPG() { return $this->mpg; }
    public function getPrice() { return $this->price; }
}
