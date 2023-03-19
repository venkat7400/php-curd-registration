


<?php 
include ("db_conn.php");

// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write delete query
	$sql = "DELETE FROM `student_data` WHERE `id`='$user_id'";

	// Execute the query

	$result = $conn->query($sql);

	if ($result == TRUE) {
    echo '
            
    <div class="bg-white container" >
            <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">DELETED Successfully</h5>
              
              </div>
              <div class="modal-body">
                <p>ID NUMBER : '.$user_id.' </p>
                
              </div>
              <div class="modal-footer">
                <button type="button" onclick="closeForm()" class="btn btn-primary">Ok</button><br>
                
              </div>
            </div>
          </div>
            </div>
            ';
	}else{
		echo "Error:";
	}

  $conn->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> <link rel="stylesheet" href="home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
	<link rel="stylesheet" href="index.css">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>TECHCRUZ</title>
    
<body>
<div class="btn1">
         <span class="fas fa-bars"></span>
      </div>
      <nav class="sidebar">
         <div class="text">
             TECHCRUZ....
         </div>
         <ul class="main_side">
            <li class="active"><a href="index.php">HOME</a></li>
            <li>
               <a href="form.php" id="1">REGISTER
               
               </a>
               
            </li>
         
            <li><a href="add.php">EDIT</a></li>
            <li><a href="filter.php">FILTER</a></li>
            
         </ul>
      </nav>
	



<div class="container">
  <br>
  <div class="cen">
  
  </div>


<div class="content">
        
         <div class="header">
         
           YOUR DATA DELETED SUCCESSFULLY......<br><span> WE MISS YOU.....</span>
         </div>
         
  </div>
</div>  

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    function closeForm(){
    window.location.pathname="regi/add.php";
    }
    </script>  
    
    <script>
      $('.btn1').click(function(){
           $(this).toggleClass("click");
           $('.sidebar').toggleClass("show");
         });
          

           $('.sidebar ul li a').click(function(){
                var id = $(this).attr('id');
                $('nav ul li ul.item-show-'+id).toggleClass("show");
                $('nav ul li #'+id+' span').toggleClass("rotate");
                
           });
           
           $('nav ul li').click(function(){
             $(this).addClass("active").siblings().removeClass("active");
           });
    </script>

</html>