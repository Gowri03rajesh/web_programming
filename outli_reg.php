<html>
<body>
<h1>Registration form</h1>

<form action="" method="POST">
    Username : <input type="text" name="username"><br><br>
    Email : <input type="text" name="email"><br><br>
    Password : <input type="password" name="pass"><br><br>
    Confirm password : <input type="password" name="cpass"><br><br>
    <input type="submit" value="Register">
</form>

<?php
// Run validation only if form is submitted
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Check if any field is empty
    if (empty($_POST['username']) ||
        empty($_POST['email']) ||
        empty($_POST['pass']) ||
        empty($_POST['cpass'])) 
    {
        echo "Please fill all required fields!";
        exit;
    }

    // Check if passwords match
    if ($_POST['pass'] !== $_POST['cpass']) {
        echo "Password and confirm password should match";
        exit;
    }

    // Success
    echo "Successful";
}
?>
</body>
</html>

