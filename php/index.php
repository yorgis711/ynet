<html>
  <head>
    <title>php test</title>
	  <style>
        body {
            background-image: url("https://kwkzcdfqvquavxhvoaqi.supabase.co/storage/v1/object/public/bucketo/forest.jpg?t=2022-09-30T12%3A43%3A56.815Z");
        }
	
    </style>
  </head>
  <body>
	  
	  <div id="timestamp"></div>
	  <h1>hello this is a php testing page</h1>
	   <?php echo '<p>hello! i am using php</p>'; ?> 
	 
	<?php echo $_SERVER['HTTP_USER_AGENT'];?>
	  <?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';

}
?>
	  <?php
if (strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE') !== FALSE ||
    strpos($_SERVER['HTTP_USER_AGENT'], 'Trident') !== FALSE) {
    echo 'You are using Internet Explorer.<br />';
}
?>
	  <form action="/php/hello/hello.php" method="post">
 <p>Your name: <input type="text" name="name" /></p>
 <p>Your age: <input type="text" name="age" /></p>
 <p><input type="submit" /></p>
	  </form>
	   <?php
    date_default_timezone_set('Europe/Athens');
    echo $timestamp = date('H:i:s');
	  ?>
	  <p><?php echo "Server Time " . date("Y-m-d h:i:s"); ?> </p>
	  
	 <?php
session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>
  </body>
</html>
