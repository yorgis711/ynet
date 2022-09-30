<html>
  <head>
    <title>PHP STUFF</title>
	  <style>
        body {
            background-image: url("https://kwkzcdfqvquavxhvoaqi.supabase.co/storage/v1/object/public/bucketo/forest.jpg?t=2022-09-30T12%3A43%3A56.815Z");
        }
	
    </style>
  </head>
  <body>
<p> Hi <?php echo htmlspecialchars($_POST['name']); ?>.
		 You are <?php echo (int)$_POST['age']; ?> years old.</p>
	 <p><a class="Back" href="/php"><span>Back</span></a></p>
  </body>
</html>
