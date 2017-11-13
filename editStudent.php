 <?php

require_once __DIR__ . '/inc/bootstrap.php';
//requireAuth();
require_once __DIR__ . '/inc/head.php';
require_once __DIR__ . '/inc/header.php';
require_once __DIR__ . '/inc/nav.php';





$student = getStudent(request()->get('studentID'));




//if(!isAdmin()&& !isOwner($book['owner_id'])){
//$session->getFlashBag()->add('error', 'Not Authorized');
//redirect('books.php');
//}
 
$studentID = $student['studentID'];
$firstName = $student['studentFirstName'];
$middleName= $student['studentMiddleName'];
$lastName= $student['studentLastName'];
$gender = $student['studentGender_ID'];
$dateOfBirth= $student['studentDateOfBirth'];
$birthEntryNo = $student['studentbirthEntryNumber'];
$NationalID = $student['studentNationalID'];
$formerSchool= $student['studentFormerSchool'];
$specialNeed = $student['studentSpecialNeed'];
$homeAddress= $student['studentHomeAddress'];
$class = $student['studentClass_ID'];
$form= $student['studentForm_ID'];
$guardianTitle = $student['gdTitle_ID'];
$guardianFirstName = $student['gdFirstName'];
$guardianMiddleName= $student['gdMiddleName'];
$guardianlastName = $student['gdLastName'];
$guardianNationalID= $student['gdNationalID'];
$guardianRelationshipToStudent= $student['gdRelationshipToStudent'];
$guardianHomeAddress= $student['gdHomeAddress'];
$guardianOccupation = $student['gdOccupation'];
$guardianEmployerName= $student['gdEmployerName'];
$guardianBusinessPhone = $student['gdBusinessPhone'];
$guardianCellPhone = $student['gdCellphone'];
$guardianTelephone = $student['gdTelePhone'];
$guardianEmail= $student['gdEmail'];


                             


$buttonText = 'Save Changes';


?>
<div class="container">
    <div class="well">
        <h2>Update Student Details</h2>
          <form class = "form-horizontal" method= "post" action = "procedures/editStudent.php">
          	   <input type="hidden" name="studentID" value="<?php echo $student['studentID'];?>"/>
              <?php include_once __DIR__ ."/inc/StudentForm.php"; ?>
          </form>
        
    </div>
</div>
<?php
require_once __DIR__ . '/inc/footer.php';
?>