<?php
require_once __DIR__ . '/inc/bootstrap.php';
require_once __DIR__ . '/inc/head.php';

?>

    <body class="wrapper">

        <div class="wrap">
            <div id="log_form" class="form">
                <form method="post"  action="#">  <!-- action="procedures/DoLogin.php"-->

                    <h2 class="form-signin-heading">Please sign in</h2>
                    <?php echo display_errors(); ?>

                    <p>
                        <label for="inputStaffID">Staff ID</label>
                        <input type="text" id="inputStaffID" name="StaffID" class="input_box" autofocus><span id="user_icon" class="fa fa-user-o"></span>
                    </p>
                    <p>
                        <label for="inputPassword">Password</label>
                        <input type="password" id="inputPassword" name="password" class="input_box"><span id="key_icon" class="fa fa-key"></span>
                    </p>
                    <p>
                        <button id="log_in" type="submit">Sign in</button>
                    </p>

                </form>
            </div>
        </div>
        <?php require_once __DIR__ . '/inc/footer.php'; ?>
