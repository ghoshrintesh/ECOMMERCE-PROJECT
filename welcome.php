	<?php
		session_start();
		if(isset($_SESSION['name']))
		{
			echo 'Welcome '.$_SESSION['name'];
			echo '<br/> <a href="logout.php?logout">Logout</a>';
			/*if(isset($_SESSION['rid']))
			{   
				echo "<br/>";
				echo 'Welcome to'.$_SESSION['rname'];
				$rid=$_SESSION['rid'];

			}*/

		}

?>