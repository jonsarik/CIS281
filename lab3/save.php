<?php
// Validate input fields
$name = $_GET["name"];
$username = $_GET["username"];
$password = $_GET["password"];
$confirm_password = $_GET["confirm_password"];
$email = $_GET["email"];
$dob = $_GET["dob"];

$error_message = "";
if (empty($name)) {
    $error_message.="<li>Name must be valid and not null</li>";
}
if (empty($username)) {
    $error_message.="<li>Username cannot be null</li>";
}
if (empty($password)) {
    $error_message.="<li>Password must be valid and not null</li>";
}
if (empty($confirm_password)) {
    $error_message.="<li>Verify password must be valid</li>";
}
if ($confirm_password !=$password){
    $error_message.="<li>Passwords must match</li>";
}
if (empty($email)) {
    $error_message.="<li>Email must be valid and not null</li>";
}
if (empty($dob)) {
    $error_message.="<li>DOB must be valid</li>";
}
if ($error_message != "") {
    include ("index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Customer Profile</title>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
<h1 class="congrats">Congratulation!!!</h1>
<p class="congrats">You added the customer: <?php echo htmlspecialchars($name); ?></p>
</body>
</html>
