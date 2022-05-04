<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') { //Checking POST Method
      $name = $_POST['name'];    //Making Two Variables for Getting INPUT
      $password = $_POST['pass']; //Making Two Variables for Getting INPUT


      // Connecting to the Database
      $servername = "localhost";
      $username = "root";
      $password = "";
      $database = "finaldb"; //Database Name
      
      // Create a connection
      $conn = mysqli_connect($servername, $username, $password,$database);
      

      //Inserting to DB
      $sql =" INSERT INTO `finaltb` (`name`, `pass`) VALUES ('$name', '$password')";  


      $result = mysqli_query($conn,$sql); //For insert Query

      //if successfully inserted than echo successfully recorded Else give the error
      if($result){
        echo 'Successfully';
      }
      else{
          echo 'Not Submited'. mysqli_error($conn);
      }

    }

    ?>
    <form action="finalform.php" method="post">
      <input type="text" name="name">
      <input type="text"  name="pass">
      <button type="submit">
        submit
      </button>
    </form>
</body>
</html>