<?php
   ob_start();
   session_start();
   include 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>School - Assignment 2</title>
</head>
<body>


	<div>

		<!--Header Start-->
			<?php
				include 'templates/header.html';
			?>
		<!--Header End-->

		<table width=100%>
			<colgroup>
				<col width="0">
				<col>
			</colgroup>
			<tr> 

				<!--Menu Start-->
				<?php
					include 'templates/menu.php';
				?>
				<!--Menu End-->


				<!--Page Content Start-->
				<td valign='top' align='left'>

					<h2><center>About My School -  Lion Ferozur Rahman Residential Academy &amp; College</center></h2>
					<br>

		  <p>In 2003,Then life went on.I got admitted into one of the new school of the Brahmanbaria..Lion Ferozur Rahman Residential Academy (School and College). got a huge campus.At last I felt welcomed in new School.I made new friends…started to be on my on strength.</p>				
				</td> 
				<!--Page Content End-->

			</tr> 
		</table>

		
		<!--Footer Start-->
			<?php
				include 'templates/footer.html';
			?>
		<!--Footer End-->

	</div>




</body>
</html>