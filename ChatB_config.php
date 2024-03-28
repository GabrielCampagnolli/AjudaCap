<?php
if(!isset($_SESSION['unique_id'])){
  header("location: login.php");
}?>
<?php
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
    $output='';
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
      }
     $output='<a href="chatBairro1.php">
      <div class="content">
      <div class="details">
          <span>'.$nome2.'</span>
      </div>
      </div>
  </a>';
    echo $output;
?>

