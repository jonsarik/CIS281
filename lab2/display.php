<?php
$destination = filter_input(INPUT_GET, "destination", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$last_name = filter_input(INPUT_GET, "last_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$first_name = filter_input(INPUT_GET, "first_name", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$travel_date = filter_input(INPUT_GET, "date", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$miles = filter_input(INPUT_GET, "miles", FILTER_VALIDATE_FLOAT);
$mpg = filter_input(INPUT_GET, "mpg", FILTER_VALIDATE_FLOAT);
$price = filter_input(INPUT_GET, "pump_price", FILTER_VALIDATE_FLOAT);

$cost = number_format(calcExpense($miles, $mpg, $price), 2, '.',',');

function calcExpense($miles, $mpg, $price) {
    return $miles / $mpg * $price;
}

$expense = [
    "Destination:" => $destination,
    "Driver:" => "$first_name $last_name",
    "Travel Date:" => $travel_date,
    "Miles Driven:" => $miles,
    "Miles per Gallon:" => $mpg,
    "Price of Gas:" => "$" . $price,
    "Travel Cost:" => "$" . $cost,
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Lab2
    CIS 281: Web Development III/Server Side Programming
	Professor Gustavo Alatta

	Travel Expense Application: Display
	Author: 	Jonathan Sarkarati
	Date: 		10/17/2024
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
