<?php
 require __DIR__ . '/inc/bootstrap.php';
 require_once __DIR__ . '/inc/head.php';
 require_once __DIR__ . '/inc/header.php';
 require_once __DIR__ . '/inc/nav.php';

if(request()->cookies->has('access_token')){

  echo "you are logged in";
}

?>

    <main>
        <h2 class="section-title">Welcome To Admin Section</h2>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
        <!-- About -->

        <div class="blocks">
            <div class="block b_1">

                <h3>Admin</h3><br>
                <a class="btn single_btn" href="admin.php">Admin Section</a>

            </div>
            <div class="block b_2">

                <h3>Staff</h3><br>
                <a class="btn single_btn" href="teachersMainPage.php">Open Staff Database</a>

            </div>
            <div class="block b_3">

                <h3>Marks</h3><br><a class="btn single_btn" href="marksDashboard.php">Open Marks Database</a>

            </div>
            <div class="block b_4">

                <h3>Student</h3><br>
                <a class="btn single_btn" href="studentsMainPage.php">Open Student Database</a>

            </div>
            <div class="block b_5">

                <h3>Library</h3><br>
                <a class="btn single_btn" href="#">Open Library Database</a>

            </div>
            <div class="block b_6">

                <h3>Exams</h3><br>
                <a class="btn single_btn" href="#">Open Exam Database</a>

            </div>

    </main>


<?php
	require_once __DIR__ . '/inc/footer.php';
?>
