<?php

	$link = mysqli_connect("localhost", "root", "root", "users");
	// server name, user name for server, password for server, database name

	if ( mysqli_connect_error() ) {

		die ("There was an error connecting to the database");

	}

?>

<form method = "post">

	<input name="email" type="text" placeholder="Email address">

	<input name="password" type="password" placeholder="Password">

	<input type="submit" value="Sign up">

</form>