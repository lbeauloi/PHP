<html>
  <head><title>Hi!</title></head>
  <body>

  <!-- start php -->
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
      
   	<?php } ?>
  <!-- end php -->
  
  </body>
</html>