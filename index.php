<?php // index.php

	include_once 'includes/header.php';
//	include_once 'includes/nav.php';
	
	echo "<div class='container'>";
	echo "<div id='content'>
				<p>Welcome! to Faysal's Nest. Please Log in or Sign up </p>
			</div></div> <!-- end #content -->";
			
//	include 'includes/sidebar.php'; 
	include 'includes/footer.php'; 

	if ($loggedin) echo " $user, you are logged in.";
else echo ' please sign up and/or log in to join in.';
?>
</span><br /><br /></div>
	<script src="http://code.jquery.com/jquery.min.js"></script>
   	<script src="bootstrap/js/bootstrap.min.js"></script>
</body></html>

