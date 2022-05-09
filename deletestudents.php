<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   // check logged in
   if (isset($_SESSION['id'])) {

      var_dump($_POST['students']);
      die();

      //Validation
      if(empty($_POST['students'])){
         header("Location: students.php");
      }

      //loop over $_POST['students'] - foreach()
      foreach (($_POST['students'])){
         $student_array['dob', 'firstname', 'lastname', 'house', 'town', 'county', 'country', 'postcode']
      
      //build SQL query to delete item
      $sql = "DELETE * FROM student;";

      //run the query
      $result = mysqli_query($conn,$sql);

      //redirect
      header("Location: students.php");
      

   } else {
      header("Location: index.php");
   }


?>
