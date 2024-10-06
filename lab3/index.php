<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gustavo's Pizzeria</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<img src="./images/logo1.PNG" alt="Logo">
<h1> Gustavo's Pizzeria Customer Profile</h1>
<span>
    <?php
    if(!empty($error_message)) {
        echo $error_message;
    }
    ?>
</span>
<fieldset>
    <legend>Customer Profile:</legend>
    <form action="save.php" method="get">

        <label>Full Name: </label>
        <input type="text" name="name" value=""/><br>

        <label>Username: </label>
        <input type="text" name="username" value=""/><br>

        <label>Password: </label>
        <input type="password" name="password" value=""/><br>

        <label>Re-type Password: </label>
        <input type="password" name="confirm_password" value=""/><br>

        <label>Email:</label>
        <input type="email" name="email" value=""/><br>

        <label>Date of Birth: </label>
        <input class="date" type="date" name="dob" value=""/><br>

        <label>&nbsp;</label>
        <input class="buttons" type="reset" value="Clear Fields">
        <input class="buttons" type="submit" value="Save Profile">
</fieldset>
</form>
</body>
</html>
