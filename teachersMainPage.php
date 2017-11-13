<?php
   require_once __DIR__ . '/inc/bootstrap.php';
   require_once __DIR__ . '/inc/head.php';
   require_once __DIR__ . '/inc/header.php';
   require_once __DIR__ . '/inc/nav.php';


?>
    <main class="clearfix">

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>

        <h2 class="section-title">STAFF DATABASE</h2>

        <a class="btn" href="addTeacher.php">Add new teacher</a>

        <form class="">
            <input type="text" placeholder="Enter Staff ID">
            <button class="btn" type="submit">Search</button>
        </form>

        <!-- /Student Details -->

        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>


        <table class="table ">
            <thead>
                <tr>
                    <th></th>
                    <th>Staff ID</th>
                    <th>Name</th>
                    <th>Middle Name</th>
                    <th>Surname</th>
                </tr>
            </thead>

            <tbody>
			
			<tr>
				<td></td>
				<td>1234</td>
				<td>Vincent</td>
				<td>Jason</td>
				<td>Moyo</td>
			</tr>

               <?php
				//foreach (getAllTeachers() as $teacher) {
               //include __DIR__ ."/inc/teacher.php";} 
			   ?>

            </tbody>
	</table>

          <?php
		  //foreach (getAllStudents() as $student) {
          	//include __DIR__.'/inc/student.php'; }   
			?>
		  
</main>

<?php
    require_once __DIR__ . '/inc/footer.php';
?>