<html>
  <head>
    <title>PHP STUFF</title>
	  <style>
        body {
            background-image: url("/img/forest.jpg");
        }
	
    </style>
  </head>
  <body>
<p> Hi <?php echo htmlspecialchars($_POST['name']); ?>.
		 You are <?php echo (int)$_POST['age']; ?> years old.</p>
	 <p><a class="Back" href="/php"><span>Back</span></a></p>
  </body>
</html>
