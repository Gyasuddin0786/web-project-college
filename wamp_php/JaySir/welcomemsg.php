<?php
  session_start();
  if(isset($_SESSION['username']))
      echo "Welcome  ".$_SESSION['username'];
  {
    ?>
    <form action="logout.php" method="post">
    <input type="submit" value="Logout" 
    class="btn btn-outline-success btn-primary text-white mt-3 col-12" name="submit">

    </form>
<?php
  }
  ?>