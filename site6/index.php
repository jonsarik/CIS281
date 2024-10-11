<!!DOCTYPE html>
<html lang="en">
<head>
    <title>Calculate Area</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<main>
    <fieldset>
        <legend>Calculate Area</legend>
        <form method="post">
            <label>Enter the length:</label>
            <input type="text" name="length" placeholder="Decimals ok!"><br>
            <label>Enter the width:</label>
            <input type="text" name="width" placeholder="Decimals ok!"><br>
            <label>&nbsp;</label>
            <input class="button" type="submit" value="Calculate!">
        </form>
    </fieldset>
</main>
</body>
</html>

<?php
require_once 'RectModel.php';

if ($_POST) {
    $rectangle1 = new Rectangle();
    $length = filter_input(INPUT_POST, "length", FILTER_VALIDATE_FLOAT);
    $width = filter_input(INPUT_POST, "width", FILTER_VALIDATE_FLOAT);
    $rectangle1->setValues($length, $width);
    $rectangle1->CalcArea();

    echo "<p class='area'>Area of rectangle = ".$rectangle1->getArea()."</p>";
}
?>
