<?php

	session_start();
	
	if (!isset($_SESSION['zalogowany']))
	{
		header('Location: index.php');
		exit();
	}
	
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
	<meta charset="utf-8" />
	<title>Support/Zgłaszanie problemu</title>
	<meta name="description" content="" />
	<meta name="keywords" content="css, odcinek" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		
	<link rel="stylesheet" href="style3.css" type="text/css" />
	

</head>

<body>

	<div id="container">
		<form>
		
			Opisz nam swój problem poniżej!<br /><br />
			<textarea name="problem" cols="38" rows="20" style="color: #B803FF; background-color: #FFFFFF; font-size: 20px; width: 292px; height: 400px; border-style: solid; border-color: #483D8B"></textarea>
			
					
			<input type="submit" value="Zgłoś">
			
			
		</form>
	</div>
	
</body>
</html>
	
<?php

	echo "<p>Użytkownik: ".$_SESSION['user'].' [ <a href="logout.php">Wyloguj się!</a> ]</p>';
	
	
	
	
	
?>

</body>
</html>