<!!DOCTYPE html>
<html lang="en">
    <head>
        <title>Calculate Pay</title>
        <link rel="stylesheet" href="./css/style.css">
    </head>
    <body>
        <main>
            <fieldset>
                <legend>Calculate Pay</legend>
                <form method="post">
                    <label>Enter employee name:</label>
                    <input type="text" name="name"><br>
                    <label>Enter employee pay rate:</label>
                    <input type="text" name="pay_rate" placeholder="Numbers only"><br>
                    <label>Enter hours worked:</label>
                    <input type="text" name="hours" placeholder="Numbers only"><br>
                    <label>&nbsp;</label>
                    <input class="button" type="submit" value="Calculate!">
                </form>
            </fieldset>
        </main>
    </body>
</html>

<?php
function calcPay($hours, $payRate) {
    if ($hours <= 40)
        return $hours * $payRate;
    else {
        $pay = $payRate * 40;
        $overTime = ($hours - 40) * 1.5 * $payRate;
        return $pay + $overTime;
    }
}

if ($_POST) {
    $employeeName = $_POST["name"];
    $payRate = $_POST["pay_rate"];
    $hoursWorked = $_POST["hours"];

    $pay = calcPay($hoursWorked, $payRate);
    echo "<p class='payroll'>".$employeeName."'s pay is: $".$pay."</p>";
}
?>