<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {


      //Validation
      if(empty($_POST['students'])){
         header("Location: students.php");
      }

      //loop over $_POST['students'] - foreach()
      foreach ($_POST['students'] as $id ){
         $sql = "DELETE FROM student WHERE studentid = $id";
         $result = mysqli_query($conn,$sql);
      }
      
      //redirect
      header("Location: students.php");
      

   } else {
      header("Location: index.php");
   }



?>
