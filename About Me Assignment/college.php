<?php
   ob_start();
   session_start();
   include 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>College - Assignment 2</title>
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

					<h2><center>About College - Dpc and Mmc </center></h2>
					<br>

					<p>
						In 2010,I changed " Dhaka Public College ( Dpc ) and Got admitted to Mohammadpur Model School and College. Started to covered songs and made a band.It's called Shut Up.Also Worked as a Volunteer and blogging.My life got greater means and hues on its canvas with every little experiences.</p>

		  <p>In 2012, I was learning acoustic Guitar from SouvobBass.One thing,i was forget to say,i love to make Friendship.I love to Hangout and i have a lot of friends too.So i am always happy and think Life is Beautiful.
					</p>
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