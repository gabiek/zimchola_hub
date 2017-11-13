<?php
 require __DIR__ . '/inc/bootstrap.php';
 require_once __DIR__ . '/inc/head.php';
 require_once __DIR__ . '/inc/nav.php';

if(request()->cookies->has('access_token')){

  echo "you are logged in";
}

?>
    <main>

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>

        <h2>Welcome To Your Dashboard :Mr Sibanda</h2>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
        <!-- About -->
        <div id="about" class="row mt-5">

            <div>
                <h4>Marks Database</h4>
            </div>



            <div>
                <h4>Library Database</h4>
            </div>

            <div>
                <h4>Text Books</h4>
            </div>

        </div>
        <!--/About -->

        <!-- About -->
        <div id="about">

            <div>
                <h4>Student Database</h4>
            </div>

            <div>
                <h4>Staff Database</h4>
            </div>

            <div>
                <h4>Library Database</h4>
            </div>

            <div>
                <h4>TextBooks</h4>
            </div>

        </div>
        <!--/About -->




    </main>

    <?php
require_once __DIR__ . '/inc/footer.php';
?>
