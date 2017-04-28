<?php
   ob_start();
   session_start();
   include 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home - Assignment 2</title>
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

					<h2><center>About Me</center></h2>
					<br>

					<table align="right">
					  <tr>
					  	<td>
					    	<img src="assets/img/me.jpg" width="200px" height="200px">
					    </td>
					  </tr>
					</table>

					<center>
						<table>
							<td>
								<ul>
					                <li> Name : Md.Nezamuddin Bhuyan Rony </li>
					                <li> About Myself : I am good for nothing </li>
					                <li> Birthday : 1993 </li>
					                <li> Profession : Student,Filmmaker </li>
					                <li> Nickname : Bhuiyan Rony </li>
					                <li> Blood Group : A+ </li>
					                <li> Religion : Islam </li>
					                <li> Favorite Game : Cricket </li>
					                <li> Favorite Songs : English Band.Bangla Band </li>
					                <li> Favorite Food : Can't explain the list.cause it's very big </li>
					                <li> Favorite Drink : 7up.Vodka,beer </li>
					                <li> Hobbies : Internet surfing </li>
					                <li> Idol : My parent and brothers </li>
					                <li> Biggest Fear : Humankind </li>
					                <li> Memorable Moments : School life and college life </li>
					                <li> Aim in life : Programmer and whenever i get time make some educational film </li>
					                <li> Message: Be honest </li>
					            </ul>
					        </td>
				        </table>
			        </center>

					<p align="center">
					
							//Last Edited on: 02-Apr-2015 12:47AM <br/>
							//This information Copied From <a href="https://www.facebook.com/bhuiyan.rony">My Facebook Profile</a>

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