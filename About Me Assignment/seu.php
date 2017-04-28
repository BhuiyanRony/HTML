<?php
   ob_start();
   session_start();
   include 'includes/functions.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>SEU - Assignment 2</title>
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

					<h2><center>About Southeast University</center></h2>
					<br>

					<p>
						
						The mission of SEU is to provide higher education to students of Bangladesh at an affordable cost, keeping in view the challenges of the twenty first century. And this mission will be achieved by imparting world class education and providing research facilities so that the students can attain their full intellectual, social and personal potentials. SEU is committed to develop human capital by cultivating creative thinking in individuals. It offers education through both campus and ICT-based online modes of teaching
					</p>				
					<p>
						
						The goal of the University is to provide excellent modern education for students with a view to equipping them with the skill and knowledge necessary to lead the country in its quest for development. Along with this, the University also aims at producing students of high moral standard in its students. Southeast University (SEU) has the authority, under its charter, to provide instruction to confer Undergraduate and Post Graduate degrees. It has plans to offer MPhil. and PhD programs in all branches of higher studies including engineering, agriculture, language, law and medical sciences. It has also the authority to grant diplomas, certificates and other academic distinctions. It has also the authority to open new Schools of studies and new institutions on its own campus. The University is run by a number of statutory bodies as required under the provisions of the Private University Act, 1992. 
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