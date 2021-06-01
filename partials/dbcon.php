<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contact";
$conn = mysqli_connect($servername, $username, $password,  $database);
if ($conn){
  ?> 
  <script>
  alert(" Connection Success");
  </script>
  <?php
}
else{
  ?>
  <script>
  alert(" Not Connected");
  </script>
  <?php
}

?>