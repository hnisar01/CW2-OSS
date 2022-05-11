
<?php echo $message; ?>

<form name="frmLogin" action="authenticate.php" method="post">
   Student ID:
   <input class='form-control' name="txtid" type="text" />
   <br/>
   Password:
   <input class='form-control' name="txtpwd" type="password" />
   <br/>
   <input type="submit" class='btn btn-danger' value="Login" name="btnlogin" />
</form>
