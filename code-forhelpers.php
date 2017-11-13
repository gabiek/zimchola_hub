<div class="media well">

     <div class="media-body">

       <h6 class="media-heading"><?php echo $student['studentID']; ?></h6>

       <span><?php echo $student['studentFirstName']; ?></span>
       <span><?php echo $student['studentMiddleName']; ?></span>
       <span><?php echo $student['studentLastName']; ?></span>

             <div class="studentCard"><!-- Card -->
                <img class="card-img-top" src="<?php echo $student['studentPhoto']; ?>" alt="<?php echo $student['studentFirstName']; ?>"></img>         
             </div> <!-- /Card -->

       <p>
         <span><a href="#">Edit</a></span>
         <span><a href="#">Delete</a></span>
       </p>
       
     </div>
 </div>



