<?php include_once "php/utilites.php"; ?>
<?php include_once "header.php"; ?>
<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <a href="users.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>
        <div class="details">
          <span><?php echo $nome2;?></span>
        </div>
      </header>
      <div class="chat-box">
  
  
      </div>
      <form action="#" class="typing-area">
    
        <input type="text" name="message" class="input-field" placeholder="Envie uma mensagem..." autocomplete="off">
        <button><i class="fab fa-telegram-plane"></i></button>
      </form>
    </section>
  </div>

  <script src="javascript/bchat.js"></script>

</body>
</html>