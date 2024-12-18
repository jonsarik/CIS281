<!DOCTYPE html>
<html lang="en">
<head>
    <!--
    Midterm
    CIS 281: Web Development III/Server Side Programming
	Professor Gustavo Alatta

	Travel Expense Application
	Author:     Jonathan Sarkarati
	Date:       10/25/2024
	Filename: 	index.html
    -->

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Travel Expense</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<main>
    <img src="./images/travel_logo.png" alt="Travel Expense Logo">

    <fieldset>
        <legend>Travel Expense</legend>
        <form action="./display.php" method="get">
            <label>Destination:</label>
            <input type="text" name="destination" value="" placeholder="Enter city or street address"/><br>
            <label>Driver's First Name:</label>
            <input type="text" name="first_name" value="" placeholder="Enter first name"/><br>
            <label>Driver's Last Name:</label>
            <input type="text" name="last_name" value="" placeholder="Enter last name"/><br>
            <label>Travel Date:</label>
            <input class="date" type="date" name="date" value=""/><br>
            <label>Miles Driven:</label>
            <input type="number" name="miles" value="" step="0.1" placeholder="Enter miles driven"
                   required /><br>
            <label>MPG:</label>
            <input type="number" name="mpg" value="" step=".1" min=".1" placeholder="Enter vehicle's fuel efficiency"
                   required /><br>
            <label>Price of Gas:</label>
            <input type="number" name="pump_price" value="" step="0.001" placeholder="Enter price per gallon"
                   required /><br>
            <label>&nbsp;</label>
            <input class="buttons" type="reset" value="Reset">
            <input class="buttons" type="submit" value="Submit">
        </form>
    </fieldset>

    <footer>
        &copy; 2024 <a href="https://jonsarik.github.io/CIS181-travel/pages/about">Jonathan Sarkarati</a>
    </footer>
</main>
</body>
</html>
