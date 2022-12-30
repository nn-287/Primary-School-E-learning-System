<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
    <style>

.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}





    </style>
</head>
<body>

	<?php include("Admin'sHeader.php"); ?>


    <div>
	    
	    <div>
		    <div>


            <div class="container">
              <h3>In Class tasks </h3>
              <br>
              <br>
              
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>

            <th scope="col">Task Code</th>
            <th scope="col">Task title</th>
            
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>


        <?php
                           require_once ("SubjectActivities.php");
                          
                           $subjectactivity=new SubjectActivities(new ViewClasstask());
                           $result=$subjectactivity->ExcuteViewActivities();
                           
                           if($result)
                           {
                             foreach($result as $row) 
                             {
                                 ?>
                                  <tr>
                                    <td><?=$row['Taskcode']  ?></td>
                                    <td><?=$row['Tasktitle']  ?></td>
                                    <!--<td><?=$row['activities-id']  ?></td>-->
                                    
                                    <td>
                                        <button type="button" class="btn btn-primary"><i class="far fa-eye"></i></button>
                                        <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                    </td>
                                  </tr>
 
                                 <?php
 
                     
 
                             }
 
                           }
                           else
                           {
                             echo "No records found";
                           }
                           

                          ?>

                          
          
        </tbody>
      </table>
    </div>
  </div>
</div>
			    
			   

            </div>
        </div>
			    
				    
			    
			    
			    
							    
							    
		
			    
	    
	    
	    
    </div> 

</body>
</html>