
<h4  class="inner_title">STUDENT INFORMATION.</h4>


<!-- Student Details -->

<!-- Start of section-->
<div class="details">

    <label for="StudentID">Student ID</label>
    
        <input type="text" id="StudentID" name="StudentID" placeholder="" value="
        <?php if(isset($studentID)){echo $studentID;} else echo generateNewStudentID();?>"
        readonly="readonly">


    <label for="firstName">First Name</label>
    
        <input type="text" id="firstName" name="firstName" placeholder=""
         value="<?php if(isset($firstName)){echo $firstName; }?>">


    <label for="middleName">Middle Name</label>
    
        <input type="text" id="middleName" name="middleName" placeholder=""
         value="<?php if(isset($middleName)){echo $middleName; }?>">



    <label for="lastName">Last Name</label>
    
        <input type="text" id="lastName" name="lastName" placeholder="" 
        value="<?php if(isset($lastName)){echo $lastName; }?>">


    
      <label for="gender">Gender</label>
     
        <select class="input-sm" id="gender" name="gender">
          <option <?php if(isset($gender)&& $gender==1){echo "selected"; }?> value="1">Male</option>
          <option <?php if(isset($gender)&& $gender==2){echo "selected"; }?> value="2">Female</option>
        </select>
  


    <label for="dateOfBirth">Date of Birth</label>
    
        <input type="text" id="dateOfBirth" name="dateOfBirth" placeholder="" 
        value="<?php if(isset($dateOfBirth)){echo $dateOfBirth; }?>">


    <label for="birthEntryNo">Birth Entry No.</label>
    
        <input type="text" id="birthEntryNo" name="birthEntryNo" placeholder="" value="<?php if(isset($birthEntryNo)){echo $birthEntryNo; }?>">


    <label for="NationalID">National ID</label>
    
        <input type="text" id="NationalID" name="NationalID" placeholder=""
         value="<?php if(isset($NationalID)){echo $NationalID; }?>">


</div>
<!-- End of section-->
<!-- Start of section-->
<div class="details">


    <label for="formerSchool">Former School</label>
    
        <input type="text" id="formerSchool" name="formerSchool" placeholder="" value="<?php if(isset($formerSchool)){echo $formerSchool; }?>">
    




      <label for="specialNeed">Special Need</label>
      
        <textarea rows="3" id="specialNeed" name="specialNeed" >
          <?php if(isset($specialNeed)){echo $specialNeed; }?>
        </textarea>
      
    



      <label for="homeAddress">Home Address</label>
      
        <textarea rows="3" id="homeAddress" name="homeAddress">
          <?php if(isset($homeAddress)){echo $homeAddress; }?>
        </textarea>
      
    

      
      <label for="form">Form</label>
     
        <select class="input-sm" id="form" name="form">
           <option <?php if(isset($form) && $form==1){echo "selected"; }?> value="1">Form 1</option>
           <option <?php if(isset($form) && $form==2){echo "selected"; }?> value="2">Form 2</option>
           <option <?php if(isset($form) && $form==3){echo "selected"; }?> value="3">Form 3</option>
           <option <?php if(isset($form) && $form==4){echo "selected"; }?> value="4">Form 4</option>
           <option <?php if(isset($form) && $form==5){echo "selected"; }?> value="5">Form 5</option>
           <option <?php if(isset($form) && $form==6){echo "selected"; }?> value="6">Form 6</option>
        </select>
      
    


    
      <label for="class">Class</label>
     
        <select class="input-sm" id="class" name="class">
           <option <?php if(isset($class) && $class==1){echo "selected"; }?> value="1">A1</option>
           <option <?php if(isset($class) && $class==2){echo "selected"; }?> value="2">A2</option>
           <option <?php if(isset($class) && $class==3){echo "selected"; }?> value="3">A3</option>
           <option <?php if(isset($class) && $class==4){echo "selected"; }?> value="4">A4</option>
        </select>
      
</div>
<!-- End of section-->

<!-- Guardian Details -->


<h4 class="inner_title">GUARDIAN DETAILS</h4>

<!-- Start of section-->
<div class="details">

      <label for="guardianTitle">Title</label>
     
        <select class="input-sm" id="guardianTitle" name="guardianTitle">
          <option <?php if(isset($guardianTitle)&& $guardianTitle==1){echo "selected"; }?> value="1">Mr</option>
          <option <?php if(isset($guardianTitle)&& $guardianTitle==2){echo "selected"; }?> value="2">Mrs</option>
          <option <?php if(isset($guardianTitle)&& $guardianTitle==3){echo "selected"; }?> value="3">Ms</option>
        </select>
      
    


    <label for="guardianFirstName">First Name</label>
    
        <input type="text" id="guardianFirstName" name="guardianFirstName" placeholder="" value="<?php if(isset($guardianFirstName)){echo $guardianFirstName; }?>">
    



    <label for="guardianMiddleName">Middle Name</label>
    
        <input type="text" id="guardianMiddleName" name="guardianMiddleName" placeholder="" value="<?php if(isset($guardianMiddleName)){echo $guardianMiddleName; }?>">
    




    <label for="guardianlastName">Last Name</label>
    
        <input type="text" id="guardianlastName" name="guardianlastName" placeholder="" value="<?php if(isset($guardianlastName)){echo $guardianlastName; }?>">
    




    <label for="guardianNationalID">National ID</label>
    
        <input type="text" id="guardianNationalID" name="guardianNationalID" placeholder="" value="<?php if(isset($guardianNationalID)){echo $guardianNationalID; }?>">
    



    <label for="guardianRelationshipToStudent">Relationship To Student</label>
    
        <input type="text" id="guardianRelationshipToStudent" name="guardianRelationshipToStudent" placeholder="" 
        value="<?php if(isset($guardianRelationshipToStudent)){echo $guardianRelationshipToStudent; }?>">
    



      <label for="guardianHomeAddress">Home Address</label>
      
        <textarea rows="3" id="guardianHomeAddress" name="guardianHomeAddress" >
         <?php if(isset($guardianHomeAddress)){echo($guardianHomeAddress); }?>
        </textarea>
      
    </div>
<!-- End of section-->
<!-- Start of section-->
<div class="details">

    <label for="guardianOccupation">Occupation</label>
    
        <input type="text" id="guardianOccupation" name="guardianOccupation" placeholder="" value="<?php if(isset($guardianOccupation)){echo $guardianOccupation; }?>">
    



    <label for="guardianEmployerName">Employer Name</label>
    
        <input type="text" id="guardianEmployerName" name="guardianEmployerName" placeholder="" value="<?php if(isset($guardianEmployerName)){echo $guardianEmployerName; }?>">
    



    <label for="guardianBusinessPhone">Business Phone</label>
    
        <input type="text" id="guardianBusinessPhone" name="guardianBusinessPhone" placeholder="" value="<?php if(isset($guardianBusinessPhone)){echo $guardianBusinessPhone; }?>">
    



    <label for="guardianCellPhone">Cell Phone</label>
    
        <input type="text" id="guardianCellPhone" name="guardianCellPhone" placeholder="" value="<?php if(isset($guardianCellPhone)){echo $guardianCellPhone; }?>">
    



    <label for="guardianTelephone">Telephone Phone</label>
    
        <input type="text" id="guardianTelephone" name="guardianTelephone" placeholder="" value="<?php if(isset($guardianTelephone)){echo $guardianTelephone; }?>">
    




    <label for="guardianEmail">Email</label>
    
        <input type="text" id="guardianEmail" name="guardianEmail" placeholder="" 
        value="<?php if(isset($guardianEmail)){echo $guardianEmail; }?>">
    
</div>
<!-- End of section-->
<!-- Start of section-->
<div class="details">-- /Guardian Details -->

 
    
        <button type="submit" class="btn"><?php if(isset($buttonText)){echo $buttonText;} else{
           echo "ADD STUDENT";
        }?></button>

                <button type="submit" class="btn"><?php if(isset($buttonText)){echo $buttonText;} else{
           echo "CANCEL";
        }?></button>
    </div>
<!-- End of section-->

