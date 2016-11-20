<?php
   header('Content-type: text/html; charset=utf-8');
   //session_start();
?>
<?php
   error_reporting( E_ALL | E_STRICT );
   ini_set( "display_errors", "on" );
   ini_set( "log_errors", "off" );
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" >
   <link rel="stylesheet" href="styles.css" />
   <script src="jquery.js"></script>
   <script src="main.js"></script>
   <title>Password & File Drop</title>
</head>


<body>
   <header>
      <h1>Share passwords and files</h1>
   </header>
   <?php require "main.php" ?>
</body>
</html>
