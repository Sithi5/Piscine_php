<?PHP
session_start();
if ($_GET['submit'] == "OK")
{
	$_SESSION['login'] = $_GET['login'];	
	$_SESSION['passwd'] = $_GET['passwd'];	
}
?>

<html>
	<head>
		<meta charset="UTF-8">
		<title>Create account</title>
	</head>
	<body>
		<form action="." method="get">
		Identifiant: <input type="text" name="login" value="<?PHP echo $_SESSION['login'] ?>" placeholder="enter your username" required/>
			<br />
			Mot de passe: <input type="password" name="passwd" value="<?PHP echo $_SESSION['passwd'] ?>" placeholder="enter your password" required/>
			<br />
			<input type="submit" name="submit" value="OK"  placeholder="submit" required/>
		</form>
	</body>
</html>
