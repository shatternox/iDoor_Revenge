<?php
    session_start();
    require "../config/db.php";

    if(!isset($_SESSION['username'])){
        header("Location: ../login.php");
    }

    if(isset($_POST['door_id']) && isset($_POST['door_name'])){

        $door_id = $_POST['door_id'];
        $door_name = $_POST['door_name'];
        $username = $_SESSION['username'];

        $q = "INSERT INTO order_history (order_id, username, item_purchased, item_name) VALUES (?,?,?,?)";
        if ($stmt = $conn->prepare($q)){
            $current_time = strval(time());
            
            $stmt->bind_param("ssss", $current_time, $username, $door_id, $door_name);
    
            $stmt->execute();

            header("Location: ../order_history.php");

        }
        else{
            print_r($conn->error);
            // echo $error;
        }
        
        


    } else {
        die(":3");
    }



?>