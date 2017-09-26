<link rel="stylesheet" href="assets/form.css">
<?php
/* welcome.php */

//$_SESSION variables become available on this page
session_start();
?>
<div class="body content">
<div class="welcome">
<div class="alert alert-success"><?= $_SESSION['message'] ?></div>
<!-- <img src="<?= $_SESSION['avatar'] ?>"><br /> -->
Welcome <span class="user"><?= $_SESSION['username'] ?></span>

  <?php
    $mysqli = new mysqli("localhost", "root", "root", "crush");
    $sql = "SELECT username FROM users";
    // $result = mysqli_result object
    $result = $mysqli->query( $sql );
  ?>

  <div id='registered'>
    <span>All registered users:</span>
    <?php
    //returns associative array of fetched row
    while( $row = $result->fetch_assoc() ){
        echo "<div class='userlist'><span>".$row['username']."</span><br /></div>";
        // echo "<img src='".$row['avatar']."'></div>";
        }
      ?>
    </div>
  </div>
</div>
