<!DOCTYPE HTML>
<html>
<body>
	<h4> result achieved using the HTTP GET method: </h4>
<p>$_GET is an array of variables passed to the current script via the URL parameters.</p>

<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

	<h4> result achieved using the HTTP GET method:	</h4>
<p>$_POST is an array of variables passed to the current script via the HTTP POST method.</p>

<form action="welcome.php" method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
<input type="submit">
</form>

</body>
</html>
