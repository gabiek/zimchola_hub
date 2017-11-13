        
        <form class="form-signin" method="post" action="/MuzindaSchoolDatabase1/procedures/DoRegister.php">
            <div class="text-center">
             <h4 class="form-signin-heading">Enter User Details</h4>
            </div>
            <?php echo display_errors(); ?>
            <label for="inputStaffID" class="">Staff ID: </label>
            <input type="text" id="inputStaffID" name="StaffID" placeholder="Staff ID" required autofocus>
         
            <label for="inputPassword" class="">Password: </label>
            <input type="password" id="inputPassword" name="password" placeholder="Password" required>

            <label for="inputPassword" class="">Confirm Password: </label>
            <input type="password" id="inputPassword" name="confirm_password" placeholder="Confirm Password" required>

            <button class="btn" type="submit">Register</button>
        </form>