<?php

// require './connections/dbcon.php';
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// session_start();

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//     $username = $_POST['username'];
//     $password = $_POST['password'];

    
//     $sqlQuery = "SELECT * FROM admin WHERE username = :username";
//     $statement = $pdo->prepare($sqlQuery);
//     $statement->bindParam(':username', $username);
//     $statement->execute();

//     if ($row = $statement->fetch(PDO::FETCH_ASSOC)) {

//         if (password_verify($password, $row['password'])) {
    
//             $_SESSION['admin_id'] = $row['id'];
//             $_SESSION['admin_username'] = $row['username'];

//             header("location: ../admin/adminDash.html");
//             exit;
//         } else {
           
//             $message = "Access Denied (Invalid username or password)";
//             $_SESSION['loginMessage'] = $message;
//             header("location: login.php");
//             exit;
//         }
//     } else {

//         $message = "Access Denied (Invalid username or password)";
//         $_SESSION['loginMessage'] = $message;
//         header("location: login.php");
//         exit;
//     }
// }

session_start();

$host = "localhost";

$user = "root";

$password = "";

$db = "phpCRUD";

$data = mysqli_connect($host, $user, $password, $db);


if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
    
    $name = $_POST['username'];

    $password = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE username = '".$name."' AND password = '".$password."' ";

    $result = mysqli_query($data, $sql);

    $row = mysqli_fetch_array($result);

    if ($row['usertype']=="admin") {

        $_SESSION['username'] = $name;

        header("location:../admin/adminDash.html");
    }

    else{

        
        $message =  "Acess Denied (Username or password mismatch)";

        $_SESSION['loginMessage'] = $message;

        header("location:login.php");
    }

}

?>
