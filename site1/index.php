<?php
    if (!isset($first_name))
    {
        $first_name="";
    }
    if (!isset($last_name))
    {
        $last_name="";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My First Sample - CIS281</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <span>
            <?php
            if(!empty($error_message))
            {
                echo $error_message;
            }
            ?>
        </span>
    <form action="display.php" method="get">
        <label>First Name:</label>
        <input type="text" name="first_name" value="<?php echo $first_name ?>">
        <label>Last Name:</label>
        <input type="text" name="last_name" value="<?php echo $last_name ?>">
        <label>&nbsp;</label>
        <input type="submit" value="Click Me">

    </form>
    </main>
</body>
</html>