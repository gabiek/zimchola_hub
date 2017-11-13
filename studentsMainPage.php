<?php
require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth(); 
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';

?>
    <main>

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>

        <h2 class="section-title">Students</h2>
        <a class="btn" href="addStudent.php">Add new student</a>



        <form>
            <input type="text" placeholder="Search">
            <button class="btn" type="submit">Search</button>
        </form>

        <?php echo display_errors(); ?>
        <?php echo display_success(); ?>


        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Student ID</th>
                    <th>Name</th>
                    <th>Middle Name</th>
                    <th>Surname</th>
                    <th>Form</th>
                    <th>Class</th>
                </tr>
            </thead>

            <tbody>
			
				<tr>
					<td></td>
					<td>1234</td>
					<td>John</td>
					<td>Sam</td>
					<td>Dube</td>
					<td>1</td>
					<td>1a2</td>
				</tr>

               <?php 
				//foreach (getAllStudents() as $student) {
               //include __DIR__ ."/inc/student.php";} 
		  ?>

            </tbody>

            <?php 
			//foreach (getAllStudents() as $student) {
          	//include __DIR__.'/inc/student.php'; }   
		  ?>
        </table>

    </main>

    <?php
   require_once __DIR__ . '/inc/footer.php';
?>
