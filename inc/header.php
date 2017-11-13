
<body>
	<div id="tooltip" class="container clearfix">
		<header>
			<div id="header_content" class="clearfix">
				<h1 class="title">
					<a href="admin.html"><!-- Name of user as retrieved from the database-->Admin</a></h1>
					
					<?php  if (!isAuthenticated()): ?>
                
				<a class="btn" id="log_out" href="procedures/DoLogout.php">Log Out</a>
				<a id="acc_settings" href="account.php" title="Account settings"><img src="img/light_circle.png"/></a>
				
          <?php else: ?>
                <a class="btn" id="log_in" href='login.php'>Login</a>
				
          <?php endif; ?>
			</div>
		</header>

		
		