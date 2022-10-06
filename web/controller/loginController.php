<?php
session_start();
require "../db/db.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if(empty($username) || empty($password)) {
        die("Empty field!");
    }
    else {

        $q = "SELECT * FROM users WHERE username = ?";

        $stmt = $conn->prepare($q);
        $stmt->bind_param("s", $username);
        $stmt->execute();

        $result = $stmt->get_result();
        if($result->num_rows < 1){
            die("Username or password is wrong");
        } else {
            
            $row = $result->fetch_assoc();
            if(password_verify($password, $row['password'])){
                $_SESSION['username'] = $row['username'];
                header("Location: ../index.php");

            } else {
                die("Username or password is wrong");
            }
        }
        header("Location: ../login.php");

    }
} else {
    header("Location: ../register.php");
}


?>