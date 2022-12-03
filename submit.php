<!DOCTYPE htnl>
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
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    

    $sql ="insert into user (firstname,lastname,email,password,phone) values ('$firstname','$lastname','$email','$password','$phone')";

    $result = mysqli_query($conn, $sql);
    if (!$result) {
        echo "Error: " . mysqli_error($conn);
        exit;
    }

    echo "Registration successfull";
    mysqli_close($conn);
    
?>
<body>
    <a href="login_form.php" >Goto Login Form</a>
</body>
</html>
