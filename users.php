<?php 
 include_once "php/utilites.php";
?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">


        </div>
        <div class="content">
          <?php 
            $sql2 = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql2) > 0){
              $row2 = mysqli_fetch_assoc($sql2);
            }
          ?>
          <img src="php/images/<?php echo $row2['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $row2['fname']. " " . $row2['lname'] ?></span>
            <p><?php echo $row2['status']; ?></p>
          </div>
        </div>
        <a href="php/logout.php?logout_id=<?php echo $row2['unique_id']; ?>" class="logout">Sair</a>
      </header>
      <div class="search">
        <span class="text">Clique em um usuario para conversar</span>
        <input type="text" placeholder="procure por um nome...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="chat-list">
        <?php include("ChatB_config.php"); 
        ?>
      </div>
      <div class="users-list">
  
      </div>
    </section>
  </div>
      
  <script src="javascript/users.js"></script>

</body>
</html>
