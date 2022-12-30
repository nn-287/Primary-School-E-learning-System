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
      <h4>Second Language Subjects</h4>
      <br>
      <br>
      <br>
      <table class="table table-bordered">
        <thead>
          <tr>

            <th scope="col">2nd language Id</th>
            <th scope="col">Title</th>
            
            <th scope="col">Actions</th>
            
          </tr>
        </thead>
        <tbody>


        <?php
                           require_once ("SecondLanguageSubject.php");
                           require_once ("SubjectDecorator.php");
                           require_once ("FrenchSubject.php");
                           require_once ("SingletonPattern.php");
                           
                           function Main(Isubject $subject)
                        {
                            echo ",type: " . $subject->Type();
                           
                        }

                           $sub = new SecondLanguageSubjects();
                           
                           
                           $decorator2=new FrenchSubject($sub);
                           
                        
                           
                           print_r(Main($decorator2));
                           
                           

                            
                            
                           
                           
                           $db = ConnectDB::getInstance();
                           $conn = $db->getconnection();

                           $sql="SELECT * FROM SecondLanguageSubjects";
                           $result=$conn->query($sql);
                            
                            
                            if($result->num_rows>0)
                            {
                                while($row=$result->fetch_assoc())
                                {
                                    ?>
                                 <tr>
					                          <td><?=$row['Id']  ?></td>
                                    <td><?=$row['Name']  ?></td>
                                    <td>
                                        
                                        <button type="button" class="btn btn-success"><i class="fas fa-edit"></i></button>
                                        <button type="button" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
                                    </td>

                                 
					               
					             </tr>

                                <?php
                                }
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