<?php 
include ("db_conn.php");

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['update'])) {
		// get variables from the form
        $user_id = $_POST['user_id'];
        $first_name = $_POST['first_name'];
		$collage_name = $_POST['collage_name'];
        $department = $_POST['department'];
		$email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
		$gender = $_POST['gender'];
        $tech = $_POST['tech'];
        $non_tech = $_POST['non_tech'];
        $food = $_POST['food'];


		// write the update query
		$sql = "UPDATE `student_data` SET `first_name`='$first_name',`collage_name`='$collage_name',`department`='$department',`email`='$email',`phone_number`='$phone_number',`gender`='$gender',`tech`='$tech',`non_tech`='$non_tech',`food`='$food' WHERE `id`='$user_id'";
		// execute the query
		$result = $conn->query($sql);

		if ($result == TRUE) {
		    echo '
            
    <div class="bg-white container" >
            <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Your Data Updated Successfully</h5>
              
              </div>
              
              <div class="modal-footer">
                <button type="button" onclick="closeForm()" class="btn btn-primary">Ok</button>
            
              </div>
            </div>
          </div>
            </div>
            ';
		}else{
			echo "Error:";
		}

		
		}else{
			// echo "Error:" . $sql . "<br>" . $conn->error;
		}
	


// if the 'id' variable is set in the URL, we know that we need to edit a record
if (isset($_GET['id'])) {
	$user_id = $_GET['id'];

	// write SQL to get user data
	$sql = "SELECT * FROM `student_data` WHERE `id`='$user_id'";

	//Execute the sql
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		
		while ($row = $result->fetch_assoc()) {
            $id = $row['id'];
			$first_name = $row['first_name'];
		$collage_name = $row['collage_name'];
        $department = $row['department'];
		$email = $row['email'];
        $phone_number = $row['phone_number'];
		$gender = $row['gender'];
        $tech = $row['tech'];
        $non_tech = $row['non_tech'];
        $food = $row['food'];
		}
    }


        else{
            // If the 'id' value is not valid, redirect the user back to view.php page
            header('Location: view.php');
        }
}

	?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
    
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <title>TECHCRUZ</title>
    
<body>
<div class="container">
<div class="row">
            <div class="card">
                <div class="card-header">
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
      
  
      


<div class="card-body mb-5">
<div class="text-center mb-5">
<h3>Student Registration</h3>
<p class="text-muted">Complete the form below to add a Registration</p>
</div>
<div class="container d-flex justify-content-center">
<form action="" method="post" style="width:50vw; min-width:300px;">
<div class="row mb-4">
<div class="col">
<label class="form-label">Name:</label>
<input type="text" class="form-control" name="first_name"
value="<?php echo $first_name; ?>">
<input type="hidden" name="user_id" value="<?php echo $id; ?>">
</div>


</div>
<div class="mb-4">
    <label class="form-label">collage Name:</label>
    <input type="text" class="form-control" name="collage_name"
    value="<?php echo $collage_name; ?>">
    </div>

    <div class="mb-4">
    <label class="form-label">Department:</label>
    <input type="text" class="form-control" name="department"
    value="<?php echo $department; ?>">
    </div>

<div class="mb-4"> 
    <label class="form-label">Email Id:</label>
    <input type="email" class="form-control" name="email"
    value="<?php echo $email; ?>">
    </div>

    <div class="mb-4"> 
    <label class="form-label">Phone Number:</label>
    <input type="phone" class="form-control" name="phone_number"
    value="<?php echo $phone_number; ?>">
    </div>


    <div class="form-group mb-4">
        <label>Gender:</label> &nbsp;
        <input type="radio" class="form-check-input" name="gender" id="male" value="male"<?php if($gender == 'male'){ echo "checked";} ?>>
        <label for="male" class="form-input-label">Male</label>
        &nbsp;
        <input type="radio" class="form-check-input" name="gender" id="female" value="female"<?php if($gender == 'female'){ echo "checked";} ?>>
        <lable for="female" class="form-input-label">Female</lable>


    </div>



    <div class="form-group mb-4">
        <label>Technical Event:</label> &nbsp;<br>
        <input type="checkbox" class="form-check-input" name="tech" id="pp" value="paper_presentation"<?php if($tech == 'paper_presentation'){ echo "checked";} ?>>
        <label for="pp" class="form-input-label">PAPER PRESENTATION</label>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="tech" id="cr" value="code_relay"<?php if($tech == 'code_relay'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">CODE RELAY</lable>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="tech" id="db" value="code_cracking"<?php if($tech == 'code_cracking'){ echo "checked";} ?>>
        <label for="pp" class="form-input-label">CODE CRACKING</label>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="tech" id="wc" value="tech_quiz"<?php if($tech == 'tech_quiz'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">TECH-QUIZ</lable>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="tech" id="tq" value="web_creation"<?php if($tech == 'web_creation'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">WEB CREATION</lable>
        <input type="checkbox" class="form-check-input" name="tech" id="none" value="none"<?php if($tech == 'none'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">NO</lable>

    </div>
<br>



    <div class="form-group mb-4">
        <label>NON_Technical Event:</label> &nbsp;<br>
        <input type="checkbox" class="form-check-input" name="non_tech" id="da" value="digital_arts"<?php if($non_tech == 'digital_arts'){ echo "checked";} ?>>
        <label for="pp" class="form-input-label">DIGITAL ARTS</label>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="non_tech" id="rm" value="reels_making"<?php if($non_tech == 'reels_making'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">REELS MAKING</lable>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="non_tech" id="sos" value="sight_on_site"<?php if($non_tech == 'sighr_on_site'){ echo "checked";} ?>>
        <label for="pp" class="form-input-label">SIGHT ON SITE</label>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="non_tech" id="th" value="treasure_hunt"<?php if($non_tech == 'treasure_hunt'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">TREASURE HUNT</lable>
        &nbsp;
        <input type="checkbox" class="form-check-input" name="non_tech" id="tc" value="tech_connection"<?php if($non_tech == 'tech_connection'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">TECH CONNECT</lable>
        <input type="checkbox" class="form-check-input" name="non_tech" id="none" value="none"<?php if($non_tech == 'none'){ echo "checked";} ?>>
        <lable for="pp" class="form-input-label">NO</lable>

    </div>
    <br>

    <div class="form-group mb-3">
        <label>FOOD:</label> &nbsp;
        <input type="radio" class="form-check-input" name="food" id="vegetarian" value="vegetarian"<?php if($food == 'vegetarian'){ echo "checked";} ?>>
        <label for="veg" class="form-input-label">VEG</label>
        &nbsp;
        <input type="radio" class="form-check-input" name="food" id="nonveg" value="nonveg"<?php if($food == 'nonveg'){ echo "checked";} ?>>
        <lable for="nonveg" class="form-input-label">NON VEG</lable>


    </div>


    <div class="form-group mb-3">
                    <label>PAYMENT:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="pay" id="cash" value="cash">
                    <label for="cash" class="form-input-label">CASH</label>
                    
                    <input type="radio" class="form-check-input" name="pay" id="online" value="online">
                    <lable for="online" class="form-input-label">ONLINE</lable>

                    <input type="radio" class="form-check-input" name="pay" id="gpay" value="gpay">
                    <lable for="gpay" class="form-input-label">GPAY</lable>
            
            
            
            
                    
                </div>
<br>
   
    <div>
        <button type="submit" id="update" class="btn btn-primary" name="update">Save</button>
        <a href="form.php" class="btn btn-danger">Cancel</a>
    </div>

</form>
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

