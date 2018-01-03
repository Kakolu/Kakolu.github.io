<html>
	<head>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
  </head>
	<body>
    <?php

      if (isset($_REQUEST['email']))  {
      
      //Email information
      $admin_email = "kakolu@usc.edu";
      $email = $_REQUEST['email'];
      $subject = $_REQUEST['name'];
      $comment = $_REQUEST['comments'];

      mail($admin_email, "$subject", $comment, "From:" . $email);
    ?>
    Thank you <?php echo $_REQUEST["name"]; ?><br>
    I will get back to you soon!<br>

    <a target="_blank" href="http://www-scf.usc.edu/~kakolu/resume/index.html"><i class="fa fa-backward"></i></a>
      <?php } ?>
	</body>
</html>
