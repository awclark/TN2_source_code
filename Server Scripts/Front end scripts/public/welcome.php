<?php

  // Start the session
  session_start();

?>

<?php require_once("../includes/functions.php") ?>

<?php require_once("../includes/layouts/header.php") ?>

<body class="w3-light-grey">

<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;">

	<!-- The Grid -->
	<div class="w3-row-padding">
  
    	<!-- Left Column -->
    	<div class="w3-third">
    
      		<div class="w3-white w3-text-grey w3-card-4">
        		<div class="w3-display-container">
          			<img src="images/network_splash.png" style="width:100%" alt="Avatar">
          			<div class="w3-display-topleft w3-container">
            			<h2>NetHealth</h2>
          			</div>
        		</div><br>
      		</div>
    	<!-- End Left Column -->
    	</div>

<?php

  $user_id = $_POST['userid'];
  $_SESSION['userid'] = $user_id;

  $connection = connect_to_database("");

  $db_name = "user" . $user_id;

  if(mysqli_select_db($connection, $db_name)) {

?>

  		<!-- Right Column -->
    	<div class="w3-twothird">
    
      		<div class="w3-container w3-card-2 w3-white w3-margin-bottom">
          		<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-lock fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Login</h2>
          		<div class="w3-container">

          			<form action="landing_page.php">
  						
          				<p>Login Successful</p>
                		<p>Click 'Enter' to proceed</p>

					  	<input type="submit" value="Enter">
					</form>
          
          		</div>
        		<br>
        		<br>  
        	</div>

    	<!-- End Right Column -->
    	</div>


<?php

  } else {

?>

		<!-- Right Column -->
    	<div class="w3-twothird">
    
      		<div class="w3-container w3-card-2 w3-white w3-margin-bottom">
          		<h2 class="w3-text-grey w3-padding-16"><i class="fa fa-lock fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Login</h2>
          		<div class="w3-container">
          	
              		<form method = "POST" action = "welcome.php">

                		<p>Error: That user does not exist. Please try again</p>
                		<p>Enter user ID:</p>
                		<p>For demonstration purposes, enter the follwing ID:</p>
                		<p>0x58b035fbf409</p>

                		<input type="text" name="userid">
                		<input type="submit">

            		</form>
          		</div>
        		<br>
        		<br>
        	</div>

    	<!-- End Right Column -->
    	</div>

<?php

  } 

?>
    
<?php require_once("../includes/layouts/footer.php") ?>