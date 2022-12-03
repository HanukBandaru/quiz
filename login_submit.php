<!DOCTYPE html>
<html>
<?php
    $db_hostname = "127.0.0.1";
    $db_username = "root";
    $db_password = "Hanok@123";
    $db_name = "quiz";

    $conn = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
    if (!$conn) {
        echo "Connection failed: " . mysqli_connect_error();
        exit;
    }

    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql = "SELECT * FROM user WHERE email='$email' AND password='$password'";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    $row = mysqli_fetch_assoc($result);
    if ($row) {
        echo "Hello " . $row['firstname'] . "<br/><br/><br/>";
    } else {
        echo "Login Failed<br/>";
    }

    mysqli_close($conn);
?>
<body>
    <a href="1.html">START QUIZ</a>
</body>
</html>