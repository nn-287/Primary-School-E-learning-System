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

            
        <form action="" method="post" class="form-horizontal">
      	<div class="row">
        	<div class="col-8 offset-4">
				<h2>Add quiz</h2>
			</div>	
      	</div>	


        <!--Startegy pattern implementation-->
        <?php
        require_once("SubjectActivitiesadd.php");
        

        $subjectactivitiesadd = new SubjectActivitiesadd(new AddQuiz());

        //echo "I'll excute now";
        
        $subjectactivitiesadd->ExcuteAddActivities();

        

        
        
        ?>		
        <div>
			<label class="col-form-label col-4">Quizcode</label>
			<div class="col-8">
                <input type="text" class="form-control" name="Quizcode" required="required">
            </div>        	
        </div>
		<div>
			<label class="col-form-label col-4">Lessontitle</label>
			<div class="col-8">
                <input type="text" class="form-control" name="Quiztitle" required="required">
            </div>        	
        </div>


               	
        
       <br>
       <br>
       <br>
		<div>
			<div class="col-8 offset-4">
				<button type="submit" name="Add"class="btn btn-primary btn-lg">Add Quiz</button>
                
			</div>  
		</div>	
        
    </form>


    </div>
  </div>
</div>
			    
			   

            </div>
        </div>
			    
				    
			    
			    
			    
							    
							    
		
			    
	    
	    
	    
    </div> 

</body>
</html>