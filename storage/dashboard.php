 <?php
 require __DIR__ . '/inc/bootstrap.php';
 require_once __DIR__ . '/inc/head.php';
 require_once __DIR__ . '/inc/nav.php';

if(request()->cookies->has('access_token')){

  echo "you are logged in";
}

?>

  <div class="container">
    <div class="well text-center">

        <h2>Welcome To Your Dashboard :Mr Sibanda</h2>
        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>
       <!-- About -->
          <div id= "about" class="row mt-5">
               

              <div class="col-md-3 order-md-1  mb-2">
                <h4 class= "mb-4 text-center well text-white">Marks Database</h4>
                  <div class="list-group">
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 1A</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 2A</a>
                       <a href="#" class="list-group-item"><strong>Computers</strong>:Form 3B</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 3B</a>
                  </div>
              </div>

              <div class="col-md-3 order-md-1  mb-2">
                <h4 class= "mb-4 text-center well text-white">Student Database</h4>
                  <div class="list-group">
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 1A</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 2A</a>
                       <a href="#" class="list-group-item"><strong>Computers</strong>:Form 3B</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 3B</a>
                  </div>
              </div>
              <div class="col-md-3 order-md-1  mb-2">
                <h4 class= "mb-4 text-center well text-white">Library Database</h4>
                  <div class="list-group">
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 1A</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 2A</a>
                       <a href="#" class="list-group-item"><strong>Computers</strong>:Form 3B</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 3B</a>
                  </div>
              </div>
              <div class="col-md-3 order-md-1  mb-2">
                <h4 class= "mb-4 text-center well text-white">TextBooks Database</h4>
                  <div class="list-group">
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 1A</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 2A</a>
                       <a href="#" class="list-group-item"><strong>Computers</strong>:Form 3B</a>
                       <a href="#" class="list-group-item"><strong>Accounts</strong>:Form 3B</a>
                  </div>
              </div>
            
           </div> <!--/About -->

       




    </div>
  </div>

<?php
require_once __DIR__ . '/inc/footer.php';
?>