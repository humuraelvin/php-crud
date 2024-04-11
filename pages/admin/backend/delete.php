<?php

$host = "localhost";

$user = "root";

$password = "";

$dbname = "phpCRUD";

$connection = mysqli_connect($host, $user, $password, $dbname);

if (isset($_GET['user_id'])) {
    $user_id = $_GET['user_id'];

    $sqlDeleteQuery = "DELETE FROM users WHERE id = ?";
    $stmt = mysqli_prepare($connection, $sqlDeleteQuery);
    mysqli_stmt_bind_param($stmt, "i", $user_id); 
    mysqli_stmt_execute($stmt);
    $affected_rows = mysqli_stmt_affected_rows($stmt);

    if ($affected_rows > 0) {
        
        header("Location: ../users.php");
        echo "
         <script type='text/javascript'>
           alert('Deletion successful');
         </script>
        ";
        exit();
    } else {
        
        header("Location: ../users.php?error=delete_failed");
         echo "
         <script type='text/javascript'>
           alert('Deletion Failed');
         </script>
        ";
        exit();
    }
} else {
    header("Location: ../users.php");
    exit();
}
?>




