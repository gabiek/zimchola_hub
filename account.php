<?php
require_once __DIR__ . '/inc/bootstrap.php';
// requireAuth(); 
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';

?>
    <main>

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>
        <h2 class="section-title">My Account</h2>
        <form class="add_form" method="post" action="/MuzindaSchoolDatabase1/procedures/changePassword.php">

            <h4 class="">Change Password</h4>
            <?php echo display_errors(); ?>
            <?php echo display_success(); ?>
            <label for="inputCurrentPassword">Current Password</label>
            <input type="password" id="inputCurrentPassword" name="current_password" placeholder="Current Password" required autofocus>

            <label for="inputNewPassword">New Password</label>
            <input type="password" id="inputNewPassword" name="new_password" placeholder="New Password" required>

            <label for="confirmPassword">Confirm Password</label>
            <input type="password" id="confirmPassword " name="confirm_password" placeholder="Confirm New Password" required>

            <button class="btn" type="submit">Change Password</button>
        </form>

    </main>

<?php require_once __DIR__ . '/inc/footer.php'; ?>
