<?php
   ob_start();
   session_start();
   include 'includes/functions.php';

   userNeedLogin();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Contact - Assignment 2</title>
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

					<h2><center>Contact</center></h2>
					<center>

						<table>
							<td>
								<ul>
					                <li> <a href="tel:01681166603">Mobile: 01681166603</a> </li>
					                <li> <a href="mailto:bhuiyan.rony@gmail.com">Mail:bhuiyan.rony@gmail.com</a> </li>
					                <li> <a href="https://bhuiyanrony.wordpress.com/">Website</a> </li>
					                <li> <a href="https://www.facebook.com/bhuiyan.rony">Facebook</a> </li>
					                <li> <a href="https://twitter.com/BhuiyanRony">Twitter</a> </li>
					                <li> <a href="https://www.instagram.com/bhuiyan_rony/">Instagram</a> </li>
					                <li> <a href="https://www.linkedin.com/in/bhuiyanrony">Linkedin</a> </li>
					            </ul>
					        </td>
				        </table>
			        </center>


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