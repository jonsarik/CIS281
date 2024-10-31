<?php
// Midterm
// CIS 281: Web Development III/Server Side Programming
// Professor Gustavo Alatta

// Travel Expense Application: Display
// Author:      Jonathan Sarkarati
// Date:        10/25/2024
// Filename:    display.php

require_once('travelexp.php');
$destination = filter_input(INPUT_GET, "destination", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$last_name = filter_input(INPUT_GET, "last_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$first_name = filter_input(INPUT_GET, "first_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$travel_date = filter_input(INPUT_GET, "date", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$miles = filter_input(INPUT_GET, "miles", FILTER_VALIDATE_FLOAT);
$mpg = filter_input(INPUT_GET, "mpg", FILTER_VALIDATE_FLOAT);
$price = filter_input(INPUT_GET, "pump_price", FILTER_VALIDATE_FLOAT);

$travel_expense = new TravelExp($destination, $first_name, $last_name, $travel_date, $miles, $mpg, $price);

$expense = [
    "Destination:" => $travel_expense->getDestination(),
    "Driver:" => $travel_expense->getFirstName() . " " . $travel_expense->getLastName(),
    "Travel Date:" => $travel_expense->getTravelDate(),
    "Miles Driven:" => $travel_expense->getMiles(),
    "Miles per Gallon:" => $travel_expense->getMPG(),
    "Price of Gas:" => "$" . $travel_expense->getPrice(),
    "Travel Cost:" => "$" . number_format($travel_expense->calcExpense(), 2, '.',','),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Midterm
    CIS 281: Web Development III/Server Side Programming
	Professor Gustavo Alatta

	Travel Expense Application: Display
	Author: 	Jonathan Sarkarati
	Date: 		10/25/2024
	Filename: 	display.php
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Travel Expense</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<main class="display">
    <table>
        <caption>Travel Expense</caption>

        <tbody>
        <?php foreach ($expense as $line_item => $value): ?>
        <tr>
            <th><?= $line_item ?></th>
            <td><?= $value ?></td>
        </tr>
        <?php endforeach; ?>
        </tbody>

        <tfoot>
        <tr>
            <td colspan="2">&copy; <?= date('Y') ?>
                <a href="https://jonsarik.github.io/CIS181-travel/pages/about">Jonathan Sarkarati</a></td>
        </tr>

        </table>
        </main>
        </body>
        </html>
