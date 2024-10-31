<?php
require_once('payroll_class.php');
$last_name = 'Sarkarati';
$first_name = 'Jonathan';
$hoursWorked = 42;
$payRate = 25.0;

$employee = new Payroll($last_name, $first_name, $hoursWorked, $payRate);
$employee->calcPay();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employee Pay Calculator</title>
    <link rel="stylesheet" href="./css/style.css"
</head>

<body>
<main>
    <h1>Employee Pay:</h1>
    <p><span>Employee Name:</span><?= $employee->getLastName() . ', ' . $employee->getFirstName() ?></p>
    <p><span>Hours Worked:</span><?= $employee->getHoursWorked() ?> hours</p>
    <p><span>Hourly Wage:</span>$<?= $employee->getPayRate() ?>/hr</p>
    <p><span>Pay:</span>$<?= $employee->getPay() ?></p>
</main>
</body>
</html>
