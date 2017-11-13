<?php
	require_once __DIR__ . '/inc/bootstrap.php';
	//requireAuth();
	require_once __DIR__ . '/inc/head.php';
	require_once __DIR__ . '/inc/header.php';
	require_once __DIR__ . '/inc/nav.php';
?>
    <main>

        <a id="back" href="index.php"><img src="img/back.png" id="back_btn">Back to Main Page</a>



        <h2 class="section-title">Teacher Registration Form</h2>

        <fieldset form="clear">
		
		<button type="submit" class="btn"><?php if(isset($buttonText)){echo $buttonText;} else{
              echo "Add new teacher";}?></button>

        <a class="btn" href="adminDashboard.php">Clear teacher details</a>
		</fieldset>

        <form id="clear" class="add_form" method="post" action="#"><!-- action="procedures/addTeacher.php" -->

            <h5 class="inner_title">TEACHER INFORMATION</h5>

            <!-- Start of section-->
            <div class="details">

                <label for="StaffID">Staff ID: </label>

                <input type="text" class="form-control" id="StaffID" name="StaffID" value="
         <?php  //if(isset($StaffID)){echo $StaffID ;} else echo generateNewStaffID();?>" readonly="readonly">


                <label for="firstName">First Name</label>

                <input type="text" class="form-control" id="firstName" name="firstName" value="
        <?php  //if(isset($firstName)){echo $firstName ;}?>" required>


                <label for="middleName">Middle Name</label>

                <input type="text" class="form-control" id="middleName" name="middleName" value="<?php  //if(isset($middleName)){echo $middleName ;}?>">

                <label for="lastName">Last Name</label>

                <input type="text" class="form-control" id="lastName" name="lastName" value="
        <?php  //if(isset($lastName)){echo $lastName;}?>" required>

                <label for="Gender">Gender</label>

                <select class="input-sm" id="Gender" name="Gender">
          <option <?php //if(isset($gender)&& $gender==1){echo "selected"; }?> value="1">Male</option>
          <option <?php //if(isset($gender)&& $gender==2){echo "selected"; }?> value="2">Female</option>
        </select>

                <label for="DateOfBirth">Date of Birth</label>

                <input type="text" class="form-control" id="DateOfBirth" name="DateOfBirth" value="<?php //if(isset($DateOfBirth)){echo $DateOfBirth ;}?>">

                <label for="NationalID">National ID</label>

                <input type="text" class="form-control" id="NationalID" name="NationalID" value="<?php //if(isset($NationalID)){echo $NationalID ;}?>">

                <label for="EducationalQual//ifications">Educational Qual//ifications</label>

                <textarea class="form-control" rows="3" id="HomeAddress" name="EducationalQual//ifications" id="EducationalQual//ifications"><?php //if(isset($EducationalQual//ifications)){echo $EducationalQual//ifications ;}?></textarea>

            </div>
            <!-- End of section-->
            <!-- Start of section-->
            <div class="details">

                <label for="formerSchool">Former School</label>

                <input type="text" class="form-control" id="formerSchool" name="formerSchool" value="<?php //if(isset($formerSchool)){echo $formerSchool ;}?>">

                <label for="CellPhone">Cell Phone</label>

                <input type="text" class="form-control" id="Form" name="CellPhone" value="
        <?php //if(isset($CellPhone)){echo $CellPhone ;}?>">


                <label for="Telephone">Telephone</label>

                <input type="text" class="form-control" id="Telephone" name="Telephone" value="
        <?php //if(isset($Telephone)){echo $Telephone ;}?>">

                <label for="Email">Email</label>

                <input type="text" class="form-control" id="Email" name="Email" value="
        <?php //if(isset($Email)){echo $Email ;}?>">

                <label for="HomeAddress">Home Address</label>

                <textarea class="form-control" rows="3" id="HomeAddress" name="HomeAddress"><?php //if(isset($HomeAddress)){echo $HomeAddress ;}?></textarea>

                <label for="ShortDescription">Short Description</label>

                <textarea class="form-control" rows="3" id="ShortDescription" name="ShortDescription"><?php //if(isset($ShortDescription)){echo $ShortDescription ;}?></textarea>


            </div>
            <!-- End of section-->
            <!-- Start of section-->

            <h5 class="inner_title">NEXT OF KIN DETAILS</h5>
            <div class="details">

                <label for="Title">Title</label>

                <select id="Title" name="Title">
          <option <?php //if(isset($Title)&& $Title==1){echo "selected"; }?> value="1">Mr</option>
          <option <?php //if(isset($Title)&& $Title==2){echo "selected"; }?> value="2">Mrs</option>
          <option <?php //if(isset($Title)&& $Title==3){echo "selected"; }?> value="3">Ms</option>
        </select>

                <label for="firstName1">First Name</label>

                <input type="text" class="form-control" id="firstName1" name="firstName1" value="<?php //if(isset($firstName1)){echo $firstName1;}?>">

                <label for="middleName1">Middle Name</label>

                <input type="text" class="form-control" id="middleName1" name="middleName1" value="<?php //if(isset($middleName1)){echo $middleName1 ;}?>">

                <label for="lastName1">Last Name</label>

                <input type="text" class="form-control" id="lastName1" name="lastName1" value="<?php //if(isset($lastName1)){echo $lastName1 ;}?>">


                <label for="NationalID1">National ID</label>

                <input type="text" class="form-control" id="NationalID1" name="NationalID1" value="<?php //if(isset($NationalID1)){echo $NationalID1 ;}?>">

                <label for="RelationshipToTeacher1">Relationship To Teacher</label>

                <input type="text" class="form-control" id="RelationshipToTeacher1" name="RelationshipToTeacher1" value="<?php //if(isset($RelationshipToTeacher1)){echo $RelationshipToTeacher1 ;}?>">

                <label for="HomeAddress1">Home Address</label>

                <textarea class="form-control" rows="3" id="HomeAddress1" name="HomeAddress1"><?php //if(isset($HomeAddress1)){echo $HomeAddress1 ;}?></textarea>

            </div>
            <!-- End of section-->
            <!-- Start of section-->
            <div class="details">



                <label for="Occupation">Occupation</label>
                <input type="text" class="form-control" id="Occupation1" name="Occupation1" value="<?php //if(isset($Occupation1)){echo $Occupation1 ;}?>">

                <label for="EmployerName1">Employer Name</label>

                <input type="text" class="form-control" id="EmployerName1" name="EmployerName1" value="<?php //if(isset($EmployerName1)){echo $EmployerName1 ;}?>">

                <label for="BusinessPhone1">Business Phone</label>

                <input type="text" class="form-control" id="BusinessPhone1" name="BusinessPhone1" value="<?php //if(isset($BusinessPhone1)){echo $BusinessPhone1 ;}?>">

                <label for="CellPhone1">Cell Phone</label>

                <input type="text" class="form-control" id="CellPhone1" name="CellPhone1" value="<?php //if(isset($CellPhone1)){echo $CellPhone1 ;}?>">

                <label for="Email1">Email</label>

                <input type="text" class="form-control" id="Email1" name="Email1" value="<?php //if(isset($Email1)){echo $Email1 ;}?>">

                <label for="exampleInputFile">Attach Photo</label>
                <input type="file" class="form-control-file" id="exampleInputFile" aria-describedby="fileHelp">

            </div>
            <!-- End of section-->

            <?php 
			//include __DIR__ ."/inc/teacherForm.php"; 
			?>
        </form>
    </main>

    <?php
	require_once __DIR__ . '/inc/footer.php';
?>
