<?php

$host = "localhost";

$user = "root";

$password = "";

$dbname = "phpCRUD";

$connection = mysqli_connect($host, $user, $password, $dbname);

$id = $_GET['user_id'];

$sqlGetQuery = "SELECT * FROM users WHERE id = ?";
$stmt = mysqli_prepare($connection, $sqlGetQuery);

mysqli_stmt_bind_param($stmt, "i", $id);


mysqli_stmt_execute($stmt);


$result = mysqli_stmt_get_result($stmt);

$info = mysqli_fetch_assoc($result);

if (isset($_POST['updateUser'])) {
    
    $id = $_GET['user_id'];
    $newName = $_POST['names'];
    $newEmail = $_POST['email'];
    $newAge = $_POST['age'];
    $newPassword = $_POST['password'];
    $newGender = $_POST['gender'];

    $sqlUpdateQuery = " UPDATE users SET fullNames = '$newName', email = '$newEmail', age = $newAge , password = '$newPassword', gender = '$newGender' WHERE id = '$id' ";

    $updateResult = mysqli_query($connection, $sqlUpdateQuery);

    if ($updateResult) {
        echo "User updated sucessfully";
        header("location:../users.php");
        
    }else {
        echo "User updating failed";
    }

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        * {
            font-family: sans-serif;
        }

        .nav_bar {
            position: sticky;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: center;
            padding: 5px 10px;
            background: #ff5722;
        }

        .nav_bar h1 {
            margin: 15px;
        }

        .nav_bar ul {
            list-style: none;
            padding: 5px;
            margin: 5px;
            display: flex;
            align-items: center;
            float: right;
        }

        .nav_bar li {
            margin: 5px 10px;
        }

        .nav_bar a {
            display: flex;
            position: absolute;
            top: 7%;
            left: 90%;
            text-decoration: none;
            color: white;
        }

        .side_bar {
            background: #2d4059;
            width: 20%;
            height: 800px;
        }

        .side_bar li {
            list-style: none;
        }

        .side_bar a {
            text-decoration: none;
            color: white;
            position: static;
            top: 20%;

        }

        .intro {
            position: absolute;
            align-items: center;
            top: 20%;
            left: 40%;
        }
    </style>
</head>

<body>
    <div class="nav_bar">
        <nav>
            <ul>
                <li>
                    <h1><strong>ADMIN DASHBOARD</strong></h1>
                </li>
                <li><a class="btn btn-primary" href="../authentication/logout.php">Logout</a></li>
            </ul>
        </nav>
    </div>

    <div class="side_bar">
        <aside>
            <ul>
                <br><br>
                <li><a href="../../index.html">HOME</a></li>
                <br><br>
                <li><a href="../adminDash.html">DASHBOARD</a></li>
                <br><br>
                <li><a href="../users.php">USERS DATA</a></li>
            </ul>
        </aside>
    </div>

    <div class="intro">
        <h1><strong>UPDATE USER</strong></h1>
        <br>
         <div class="container mt-3">
                        <form action="#" method="POST">
                            <div class="mb-3 mt-3">
                            <label for="id">ID:</label>
                            <input type="text" class="form-control" value=" <?php echo "{$info['id']}"; ?> "  name="id" readonly>
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="names">Full Names:</label>
                            <input type="text" class="form-control" value=" <?php echo "{$info['fullNames']}"; ?> "  name="names">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" value=" <?php echo "{$info['email']}"; ?> "  name="email">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="age">Age:</label>
                            <input type="text" class="form-control" value=" <?php echo "{$info['age']}"; ?> "  name="age">
                            </div>
                            <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="text" class="form-control" value=" <?php echo "{$info['password']}"; ?> "  name="password">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="gender">Gender:</label>
                            <input type="text" class="form-control" value=" <?php echo "{$info['gender']}"; ?> " name="gender">
                            </div>
                            <button type="submit" name="updateUser" class="btn btn-primary">Update</button>
                        </form>
        </div>
    </div>

</body>

</html>