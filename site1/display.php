<?php 
    $first_name=$_GET["first_name"];
    $last_name=$_GET["last_name"];
    $college="Wilbur Wright College";
    $error_message="";
    if (empty($first_name))
    {
        $error_message.="<li>First Name must be valid!!!</li>";
    }
    if (empty($last_name))
    {
        $error_message.="<li>Last Name must be valid!!!</li>";
    }
    if ($error_message != "")
    {
        include("index.php");
        exit();
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Name TEST</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Welcome to <?php echo $college ?></h1>
    <p>First Name: <?php echo $first_name ?></p>
    <p>Last Name: <?php echo $last_name ?></p>
</body>
</html>