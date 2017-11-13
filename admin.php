<?php
require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth(); 
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';

?>
    <main>
        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>
        <h2 class="section-title">Administration Section</h2>


        <button type="button" id="myBtn" class="btn" data-toggle="modal">Register New User</button>

        <div id="myModal" class="modal">


            <div class="modal-content">
                <span class="close">Cancel</span>
                <form class="" method="post" action="procedures/DoRegister.php">

                    <?php include __DIR__ ."/inc/userRegistrationForm.php"; ?>

                </form>
            </div>

        </div>
        <div>

            <table class="table">
                <thead>
                    <tr>
                        <th></th>
                        <th>Staff ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Registered</th>
                        <th>Promote/Demote</th>
                    </tr>
                </thead>
                <tbody>
				<tr>
					<td></td>
					<td>1234</td>
					<td>John</td>
					<td>Dube</td>
					<td>Yes</td>
					<td>
						<a href="#">Promote</a> 
						<a href="#">Promote</a>
					</td>
				</tr>

                </tbody>
            </table>

    </main>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
