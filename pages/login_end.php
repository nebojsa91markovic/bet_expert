<?php
	if (isset($_POST['submit'])){
		require_once('required/base.php');

			if($conn->connect_error) {
				echo "<p>Server nije dostupan</p>";			}
				$user = $_POST['user'];
				$pass = $_POST['pass'];
				
				$result_admin = $conn->query("SELECT*
				FROM users");
				
				if ($result_admin->num_rows > 0)
					while ($row = $result_admin->fetch_assoc())
					{
                        if ($user==$row['email'])
                        {
                            if ($pass==$row["pass"])
                        	$_SESSION['user_id']= $row['user_id'];
							$_SESSION['email']= $row['email'];
							$_SESSION['user_print']= $row['name'].' '.$row['surname'];
							$_SESSION['privilege']= $row['privilege'];
							echo '<script language="javascript">
							window.location.href ="?p=main"
							</script>';					}
					else{
						echo "NEISPRAVNI PODACI";}
				}}
            


?>