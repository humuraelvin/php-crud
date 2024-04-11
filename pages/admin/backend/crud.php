<?php

require '../connections/dbcon.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
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

}

?>