<td valign='top'> 
	<table border=1>
		<tbody>


			<tr> 
				<td align="center"><b> Options </b></td> 
			</tr>
			<tr>
				<td nowrap><a href="index.php"> About Me </a></td>
			</tr>
			<tr>
				<td nowrap><a href="school.php"> About My School </a></td>
			</tr>
			<tr>
				<td nowrap><a href="college.php"> About My College </a></td>
			</tr>
			<tr>
				<td nowrap><a href="seu.php"> About Southeast University </a></td>
			</tr>
			<tr>
				<td nowrap><a href="contact.php"> Contact Me </a></td>
			</tr>

			<?php
				if (isset($_SESSION['loggedin'])) {
					echo '
						<tr>
							<td nowrap><a href="logout.php"> Logout </a></td>
						</tr>
					';
				}
			?>

		</tbody>
	</table> 
</td> 