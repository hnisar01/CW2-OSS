<?php

   include("_includes/config.inc");
   include("_includes/dbconnect.inc");
   include("_includes/functions.inc");


   if (isset($_SESSION['id'])) {

      $array_students = array(
         array(
            "studentid" => 2000002,
            "password" => "test",
            "dob" => "1999-11-10",
            "firstname" => "Bob",
            "lastname" => "Builder",
            "house" => "Rainbow Road",
            "town" => "Narnia",
            "county" => "Berkshire",
            "country" => "United Kingdom",
            "postcode" => "SL6 7HH",
         ),
         array(
            "studentid" => 2000003,
            "password" => "test",
            "dob" => "1989-11-10",
            "firstname" => "Jeff",
            "lastname" => "Bezos",
            "house" => "Chocolate Close",
            "town" => "Caramel City",
            "county" => "Berkshire",
            "country" => "United Kingdom",
            "postcode" => "SL6 7JJ",
         ),
         array(
            "studentid" => 2000004,
            "password" => "test",
            "dob" => "1979-11-10",
            "firstname" => "Postman",
            "lastname" => "Pat",
            "house" => "Coronation Cottage",
            "town" => "Slough",
            "county" => "Berkshire",
            "country" => "United Kingdom",
            "postcode" => "SL6 7KK",
         ),
         array(
            "studentid" => 2000005,
            "password" => "test",
            "dob" => "1969-11-10",
            "firstname" => "Elon",
            "lastname" => "Musk",
            "house" => "Billionaire Mansion",
            "town" => "RichVille",
            "county" => "Money",
            "country" => "United Kingdom",
            "postcode" => "SL6 7HH",
         ),
         array(
            "studentid" => 2000006,
            "password" => "test",
            "dob" => "2000-11-10",
            "firstname" => "Purple",
            "lastname" => "Teletubby",
            "house" => "Night Garden",
            "town" => "Tubby Land",
            "county" => "Berkshire",
            "country" => "United Kingdom",
            "postcode" => "SL6 7AA",
         ),
      );
   }

      foreach ($array_students as $key => $student){
         $sql = "INSERT INTO student (studentid, password, dob, firstname, lastname, house, town, county, country, postcode) 
         VALUES ('{$student["studentid"]}','{$student["password"]}', '{$student["dob"]}', '{$student["firstname"]}', '{$student["lastname"]}',' {$student["house"]}','{$student["town"]}', '{$student["county"]}', '{$student["country"]}','{$student["postcode"]}')";
         echo $sql;
         $result = mysqli_query($conn,$sql);
      }
   
?>
