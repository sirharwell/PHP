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
				Y : 4 digit year
