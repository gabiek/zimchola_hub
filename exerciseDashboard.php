<?php
require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth(); 
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';

?>
    <main>

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>

        <form  id="add_test" class="add_form">

            <div class="details">

                <h3 id="heading">Test details</h3>

                <label for="Topic" id="col-1">Topic: 
			 <input type="text" id="Topic" name="Topic" value="">
			</label>


                <label for="SubTopic" id="col-2">Sub-Topic: 
			<input type="text" id="SubTopic" name="SubTopic"  value="">
			</label>


                <label for="Title" class="col-1 control-label">Title: 
			<input type="text" id="Title" name="Title" value="">
			</label>

                <label for="HighestPossibleMark" class="col-2 control-label">Highest Possible Mark: 
			<input type="text" id="HighestPossibleMark" name="HighestPossibleMark" value="">
			</label>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Student ID</th>
                        <th>Student Name</th>
                        <th>Student Surname</th>
                        <th>Mark</th>
                        <th>Comment</th>
                    </tr>
                </thead>

                <tbody>
					
					    <tr>
 
					<td>
              <input type="text" class="form-control" id="StudentID" name="StudentID[]" value="<?php //echo $exercise['studentID']; ?>" readonly="readonly"> 
      </td>

       <td>
              <input type="text" class="form-control" id="studentFirstName" name="studentFirstName[]" value="<?php //echo $exercise['studentFirstName']; ?>" readonly="readonly">
      </td>


       <td>
              <input type="text" class="form-control" id="studentLastName" name="studentLastName[]" value="<?php //echo $exercise['studentLastName']; ?>" readonly="readonly">
      </td>

       <td>
              <input type="text" class="form-control" id="Mark" name="Mark[]" value="<?php //echo $exercise['Mark']; ?>" >
      </td>

       <td>
              <input type="text" class="form-control" id="Comment" name="Comment[]" value="<?php //echo $exercise['Comment']; ?>">
      </td>
      
     
    
    </tr>


					<?php 
						//foreach (getAllExercises() as $exercise) {
						//include __DIR__ ."/inc/tableExerciseMark.php"; } 
					?>

                </tbody>
            </table>

           

        </form> 
		
		<fieldset form="add_test">
		<button type="submit" class="btn single_btn" id="" value="Add Test">Add Test</button>
		</fieldset>
		
		
		
	</main>


<?php 
	require_once __DIR__ . '/inc/footer.php'; 
?>
