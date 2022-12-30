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
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>

            <th scope="col">Assignment Id</th>
            <th scope="col">Assignemnt title</th>
            
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>


        <?php
                           require_once ("SubjectActivities.php");
                          
                           $subjectactivity=new SubjectActivities(new ViewAssignments());
                           $result=$subjectactivity->ExcuteViewActivities();
                           
                           if($result)
                           {
                             foreach($result as $row) 
                             {
                                 ?>
                                  <tr>
                                    <td><?=$row['Id']  ?></td>
                                    <td><?=$row['Title']  ?></td>
                                    
                                    
                                    <td>
                                        
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