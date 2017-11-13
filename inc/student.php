
 

    <tr>
      <td>
          <span><a class="btn btn-outline-info" href="/MuzindaSchoolDatabase1/editStudent.php?studentID=<?php echo $student['studentID']; ?>">Edit</a></span>
         <button type="button" class="btn btn-outline-danger">Delete</button>          
      </td>
       <td><?php echo $student['studentID']; ?></td>
       <td><?php echo $student['studentFirstName']; ?></td>
       <td><?php echo $student['studentMiddleName']; ?></td>
       <td><?php echo $student['studentLastName']; ?></td>
       <td><?php echo $student['studentForm_ID']; ?></td> 
       <td><?php echo $student['studentClass_ID']; ?></td>
    </tr>
        
