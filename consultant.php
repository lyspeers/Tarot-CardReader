<!DOCTYPE html>
<html>
    <meta charset="UTF-8">
    <head>
    <link rel="stylesheet" href="css/main.css">
    <title>Consultation Page, Sprint 1</title>
    </head>
    <body>
	    <div class="header">
			<?php
				include "header.php"
			?>
		</div>
	
        <div class="wrapper_main">
			<div class="wrapper_interior_a" style="width:100%; margin-bottom: 0.05%">
				<h1>Consultant Panel</h1>
			</div>
		</div>
		
		
		<div class="wrapper_main">
			<div class="wrapper_interior_a" style="width:100%; margin-top: 0.05%">
				<p><b>Readings which require consultation:</b></p>
				<?php
					include "consultant_handleSearch.php"
				?>
				
				
				
			</div>
		</div>
    </body>
</html>