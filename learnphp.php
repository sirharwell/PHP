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

			/*
				You can define constants thats value can't change
				When we call for a constant we don't use a $ and
				they are normally uppercase
			*/
			define('PI', 3.1415926);

			echo "The value of PI is " . PI;

			// Arithmetic operators
			echo "</br></br>5 + 2 = " . (5 + 2);
			echo "</br>5 - 2 = " . (5 - 2);
			echo "</br>5 * 2 = " . (5 * 2);

			// You can cast from 1 type to another like this
			echo "</br>5 / 2 = " . (integer) (5 / 2);
			echo "</br>5 % 2 = " . (5 % 2) . "</br></br>";

			// Use this shortcut when performing an operation using
			// the same variable +=, -=, *=, /=, %=, .=

			$randNum = 5;
			echo $randNum += 5;

			echo "</br></br>";

			// You can increment and decrement with this shortcut

			echo "++randNum = " . ++$randNum . "</br>";
			echo "randNum++ = " . $randNum++;

			echo "</br></br>";

			/*
				The reference operator (ampersan / &) can create a
				reference to a variable so if one changes so does the
				other
			*/
			$refToNum = &$randNum;
			$randNum = 100;
			echo '$refToNum = ' . $refToNum;

			echo "</br></br>";

			// Comparison Operators : ==, !=, <, >, <=, >=
			// === (Equal & Same Type), !== (Not Equal or Same Type)
			// An if block will perform one action or another depending
			// on conditions
			if(5 == 10){

				echo '5 = 10';

			} else {

				echo '5 != 10';

			}

			echo "</br></br>";

			/*
				elseif is used when you have more conditions to check
			*/
			$numOfOranges = 4;
			$numOfBananas = 36;

			if(($numOfOranges > 25) && ($numOfBananas > 30)){

				echo '25% Discount';

			} elseif (($numOfOranges > 30) || ($numOfBananas > 35)){

				echo '15% Discount';

			} elseif (!(($numOfOranges < 5)) || (!($numOfBananas < 5))){

				echo '5% Discount';

			} else {

				echo 'No Discount For You';

			}

			echo "</br></br>";

			// The ternary operator assigns one or another value
			// depending on the condition
			// condition ? value if true : value if false

			$biggestNum = (15 > 10) ? 15 : 10;

			echo 'Biggest Number is ' . $biggestNum;

			echo "</br></br>";
