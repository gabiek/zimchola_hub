<?php
require_once __DIR__ . '/inc/bootstrap.php';
// requireAuth(); 
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';

?>

    <main>

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>

        <div>
            <div class="">
                <a class="btn" href="exerciseDashboard.php">Record New Test/Exercise</a>
            </div>
        </div>

        <hr>


        <table class="table">
            <thead>
                <tr>
                    <th></th>
                    <th>Date</th>
                    <th>Topic</th>
                    <th>Sub-Topic</th>
                    <th>Title</th>
                </tr>
            </thead>

            <tbody>
			
				<tr>
					<td></td>
                    <td>13/02/2018</td>
                    <td>Reproduction</td>
                    <td>Human Reproduction</td>
                    <td>Test 1</td>
				</tr>
				
                <?php// foreach (getAllExercises() as $exercise) {
               //include __DIR__ ."/inc/tableMarksForm.php";} 
			   ?>


            </tbody>
        </table>

    </main>

<?php
    require_once __DIR__ . '/inc/footer.php';
?>