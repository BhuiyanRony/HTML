<?php
   ob_start();
   session_start();
   include 'includes/functions.php';
?>
<?php

    $err = "";

    if(isset($_SESSION['id'])!=""){
	      if(isset($_SERVER["HTTP_REFERER"]))
	      {
	          header("Location: " . $_SERVER["HTTP_REFERER"]);
	          exit;
	      }else{
	        header("Location: index.php ");
	      }
	      
	      sessionCheck();
	}


    if (isset($_POST['login']) && !empty($_POST['id']) && !empty($_POST['password'])) {
    	$logins = array(
				    '2013100000059' => '1234',
				    '2013100000060' => '4321',
				    '2013100000061' => '2341',
				);

		if ($logins[$_POST['id']] == $_POST['password']){
          	$_SESSION['loggedin'] = true;
          	$err = "";
          	
	        header("Location: contact.php");
	        exit;
          
       }
       else{
       		$err = "Wrong ID or Password";
       	}
    }
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

					<table width=100% border=0 cellpadding=10>
						<tr>
						    <td valign='top' align='center' width=50%>
						        <form action="login.php" method="post">
						            <table class="grbg" cellpadding=10 cellspacing=0 border=1>
						                <tr class="caption"> 
						                	<td colspan=2 align="center">
						                		<b> Login </b>
						                		<?php echo '<br><font color="red">'.$err.'</font>' ?>
						                	</td> 
						                </tr>
						                <tr>
						                    <td> Your ID </td> <td> <input type="text" name='id' class="text"> </td>
						                </tr>
						                <tr>
						                    <td> Password </td> <td> <input type="password" name="password" class="text"> </td>
						                </tr>
						                <tr>
						                    <td colspan=2 align="center"> <input type="submit" name="login" value="Login" class="button"> </td>
						                </tr>
						            </table>
						        </form>
						    </td>
						</tr>
					</table>

					<br><br>
					<center>
						Demo Password:
						'2013100000059' => '1234',
				    	'2013100000060' => '4321',
				    	'2013100000061' => '2341',
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