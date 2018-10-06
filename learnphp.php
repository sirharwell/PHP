<html>

	<head>
		<title>Information Gathered</title>
	</head>

	<body>

		<!--
			You embed PHP code between tags
			echo puts what ever is between quotes in the browser

			php code doesn't show if a user tries to view source

			A semicolon has to finish every php statement

			Single quotes : Print what is between them and ignore
				escape sequences except for \' and \\

			Double quotes : Print many escape sequences, the values
				for variables, and more
		-->

		<?php

			/* Multiline
				comment */

			// Single line comment

			# Another single line comment

			echo "<p>Data Processed at </p>";

			// Define the time zone based on the coordinated universal time
			date_default_timezone_set('UTC');

			/* Echos the date
				h : 12 hr format
				H : 24 hr format
				i : Minutes
				s : Seconds
				u : Microseconds
				a : Lowercase am or pm
				l : Full text for the day
				F : Full text for the month
				j : Day of the month
				S : Suffix for the day st, nd, rd, etc.
				Y : 4 digit year			*/
			echo date('h:i:s:u a, l F jS Y e');
			echo "</p>";

			/*
				You store values in variables that have a name
				that starts with a $

				Variables can be of any length and contain letters,
				numbers, or underscores

				They can't begin with a digit adnd are case sensitive.
				numOfCats is not equal to numofcats

				A variable is created and given a data type when it
				receives a value. That data type can change based on
				if the data is changed.

				a. Integer : Whole Numbers
				b. Float : Decimal Numbers
				c. String : Strings or characters
				d. Boolean : true or false
				e. Array : Multiple Items
				f. Object : A Object defined by a class

				A variable by default gets the value NULL

				You can access values from the html that called
				this php script to execute by putting the name
				assigned in the html in single quotes

				The data is stored in an array which is named
				$_POST
			*/

			$usersName = $_POST['username'];
			$streetAddress = $_POST['streetaddress'];
			$cityAddress = $_POST['cityaddress'];

			echo '<p>Your Information</p>';

			// You can combine variables with text using a .

			echo $usersName. ' lives at </br>';
			echo $streetAddress. ' in </br>';
			echo $cityAddress. '</br></br>';

			/*
				You can define text using heredoc syntax in the
				same way you use double quotes.
				Starts with <<< and an identifier that can't be
				used any place else in the text.
				It ends with the identifier and a semicolon
				without any white space or anything else.
			*/
			$str = <<<EOD
			The customers name is
			$usersName and they
			live at $streetAddress
			in $cityAddress</br></br>
EOD;

			echo $str;
