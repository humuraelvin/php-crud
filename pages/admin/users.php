<?php

require '../connections/dbcon.php';

if (isset($_POST['addUser'])) {
    
  $names = $_POST['names'];
  $email = $_POST['email'];
  $age = $_POST['age'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];

  $sqlQuery = "INSERT INTO users (fullNames, email, age, password, gender) VALUES ('$names', '$email', $age, '$password', '$gender') ";

  $result = mysqli_query($connection, $sqlQuery);

  if ($result) {
     echo "
     <script type='text/javascript'>
        window.alert('User Added Successfully');
     </script>
     ";

    
  }else{
      echo "
     <script type='text/javascript'>
        window.alert('Adding User Failed');
     </script>
     ";
  }

   header("location:users.php");

}


   


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
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
            top: 18%;
            left: 23%;
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
                <li><a href="../index.html">HOME</a></li>
                <br><br>
                <li><a href="./adminDash.html">DASHBOARD</a></li>
                <br><br>
                <li><a href="./users.php">USERS DATA</a></li>
            </ul>
        </aside>
    </div>

    

    <div class="intro">
       

      
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
            Add User
            </button>


        <div class="modal" id="myModal">
            <div class="modal-dialog">
                <div class="modal-content">

                
                <div class="modal-header">
                    <h4 class="modal-title">Add User Form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                
                <div class="modal-body">
                    <div class="container mt-3">
                        <form action="#" method="POST">
                            <div class="mb-3 mt-3">
                            <label for="names">Full Names:</label>
                            <input type="text" class="form-control"  placeholder="Enter FullNames" name="names">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control"  placeholder="Enter email" name="email">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="age">Age:</label>
                            <input type="number" class="form-control"  placeholder="Enter age" name="age">
                            </div>
                            <div class="mb-3">
                            <label for="pwd">Password:</label>
                            <input type="text" class="form-control" placeholder="Enter password" name="password">
                            </div>
                            <div class="mb-3 mt-3">
                            <label for="gender">Gender:</label>
                            <input type="text" class="form-control" placeholder="Enter gender" name="gender">
                            </div>
                            <button type="submit" name="addUser" class="btn btn-primary">Add</button>
                        </form>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>

        

    </div>

  
    

        <div class="container mt-3">
            <h1><strong>USERS DATA</strong></h1>
                    
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>FullNames</th>
                    <th>Email</th>
                    <th>Age</th>
                    <th>Password</th>
                    <th>Gender</th>
                    <th>Operations</th>
                </tr>
                </thead>
                <tbody>
                 <?php
                 require '../connections/dbcon.php';
                  //Retrieving the data
                 $retriveSqlQuery = "SELECT * FROM users";
                 $whatIsRetrieved = mysqli_query($connection, $retriveSqlQuery);
                 while ($info = $whatIsRetrieved->fetch_assoc()) 
                 {
                 ?>
                <tr>
                    <td>
                        <?php
                         echo "{$info['id']}";
                        ?>
                    </td>
                    <td>
                        <?php
                         echo "{$info['fullNames']}";
                        ?>
                    </td>
                    <td>
                        <?php
                         echo "{$info['email']}";
                        ?>
                    </td>
                    <td>
                        <?php
                         echo "{$info['age']}";
                        ?>
                    </td>
                    <td>
                        <?php
                         echo "{$info['password']}";
                        ?>
                    </td>
                    <td>
                        <?php
                         echo "{$info['gender']}";
                        ?>
                    </td>
                    <td>
                        
                        <a class="btn btn-info" href="./backend/viewUser.php?user_id=<?php echo urlencode($info['id']); ?>">View</a>
                        <a class="btn btn-primary" href="./backend/updateUser.php?user_id=<?php echo urlencode($info['id']); ?>">Update</a>
                        <a onclick="javascript:return confirm('Are you sure you want to delete this user');" href="./backend/delete.php?user_id=<?php echo urlencode($info['id']); ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                                   
                 <?php
                 }
                 ?>
                </tbody>
            </table>
        </div>
        
    </div>

         <?php
         
         $host = "localhost";
         
         $user = "root";

         $password = "";

         $dbname = "phpCRUD";

         $connection = mysqli_connect($host, $user, $password, $dbname);

         $user_id = $_GET['user_id'];

         $sqlGetQuery = "SELECT * FROM users WHERE id = $user_id ";

         $result = mysqli_query($connection, $sqlGetQuery);

         $info = $result->fetch_assoc();



         ?>

        


</body>

</html>