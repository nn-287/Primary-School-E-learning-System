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
				<h2>Add Preparation</h2>
			</div>	
      	</div>	


        <!--Startegy pattern implementation-->
        <?php
        require_once("SubjectActivitiesadd.php");
        

        $subjectactivitiesadd = new SubjectActivitiesadd(new AddPreparation());

        //echo "I'll excute now";
        
        $subjectactivitiesadd->ExcuteAddActivities();

        

        
        
        ?>		
        <div>
			    <label class="col-form-label col-4">Preparatiocode</label>
			    <div class="col-8">
                <input type="text" class="form-control" name="Preparationcode" required="required">
          </div>        	
        </div>

		    <div>
			    <label class="col-form-label col-4">Preparationtitle</label>
			    <div class="col-8">
                <input type="text" class="form-control" name="Preparationtitle" required="required">
          </div>        	
        </div>


               	
        
       <br>
       <br>
       <br>
		<div>
			<div class="col-8 offset-4">
				<button type="submit" name="Add"class="btn btn-primary btn-lg">Add preparation</button>
                
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