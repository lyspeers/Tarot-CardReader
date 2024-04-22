<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
    <link rel="stylesheet" href="css/main.css">
    <title>Consultation Page, Sprint 3</title>
    </head>
    <body>
	    <div class="header">
			<?php
				include "header.php"
			?>
		</div>
	
        <div class="wrapper_main">
			<div class="wrapper_interior_a" style="padding-left: 50px; margin-left: auto; margin-right: auto; width:50%; margin-bottom: 0.05%">
				<h1>Consultant Panel</h1>
				<p>In order to consult a user's reading:</p>
				<ol>
					<li>Look at the panel underneath this one.</li>
					<li>A list of readings may appear automatically when you load this page: if so, each one has a button and a number.</li>
					<li>Click the button you be directed to a page containing that user's reading information.</li>
					<li>If nothing appears, then there are no outstanding consultations.</li>
				</ol>
				<a href="index.php">Go back</a>
			</div>
		</div>
		
		
		<div class="wrapper_main">
			<div class="wrapper_interior_a" style="width:100%; margin-top: 0.05%">
				<p><b><u>Readings which require your consultation:</u></b></p>
				<?php
					include "consultant_handleSearch.php"
				?>
				
				
				
			</div>
		</div>
    </body>
</html>