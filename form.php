<?php 
include ("db_conn.php");

// if the form's submit button is clicked, we need to process the form
	if (isset($_POST['submit'])) {
		// get variables from the form
		$first_name = $_POST['first_name'];
		$collage_name = $_POST['collage_name'];
        $department = $_POST['department'];
		$email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
		$gender = $_POST['gender'];
        $tech = $_POST['tech'];
        $non_tech = $_POST['non_tech'];
        $food = $_POST['food'];
        $pay = $_POST['pay'];
       


        

		//write sql query

		$sql = "INSERT INTO `student_data`(`first_name`, `collage_name`,`department`, `email`,`phone_number`, `gender`,`tech`,`non_tech`,`food`,`pay`) VALUES ('$first_name','$collage_name','$department','$email','$phone_number','$gender','$tech','$non_tech','$food','$pay')";


        // print_r($sql);
        // die;

		// execute the query

		$result = $conn->query($sql);
        $id=$conn->insert_id;
		if ($result == TRUE) {
			
            echo '
            
    <div class="bg-white container" >
            <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Submitted Successfully</h5>
              
              </div>
              <div class="modal-body">
                <p>Your Name : '.$first_name.' </p>
                <p>Food : '.$food.'</p>
                <p>Your Id : '. $id.'</p>
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

		$conn->close();

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
    <div class="card-body">
            <div class="text-center mb-5">
            <h3>Student Registration</h3>
            <p class="text-muted">Complete the form below to add a Registration</p>
            
                <!-- <a href="add.php" class="btn btn-dark mb-3" >EDIT</a>
                <a href="event.php" class="btn btn-primary mb-3" >FILTER</a> -->
            </div>
            <div class="container d-flex justify-content-center">
            <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-4">
            <div class="col">
            <label class="form-label">Name:</label>
            <input type="text" class="form-control" name="first_name"
            placeholder="peace bros">
            </div>
            
            
            </div>
            <div class="mb-4">
                <label class="form-label">Collage Name:</label>
                <input type="text" class="form-control" name="collage_name"
                placeholder="jp collage of enginnering">
                </div>
            
                <div class="mb-4">
                <label class="form-label">Department:</label>
                <input type="text" class="form-control" name="department"
                placeholder="CSE">
                </div>
            
            <div class="mb-4"> 
                <label class="form-label">Email Id:</label>
                <input type="email" class="form-control" name="email"
                placeholder="mail@gmail.com">
                </div>
            
                <div class="mb-4"> 
                <label class="form-label">Phone Number:</label>
                <input type="phone" class="form-control" name="phone_number"
                placeholder="+9100000089">
                </div>
            
            
                <div class="form-group mb-4">
                    <label>Gender:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="male" value="male">
                    <label for="male" class="form-input-label">Male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender" id="female" value="female">
                    <lable for="female" class="form-input-label">Female</lable>
            
            
                </div>
            
            
            
                <div class="form-group mb-4">
                    <label>Technical Event:</label> &nbsp;<br>
                    <input type="checkbox" class="form-check-input" name="tech" id="pp" value="paper_presentation">
                    <label for="pp" class="form-input-label">PAPER PRESENTATION</label>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="tech" id="cr" value="code_relay">
                    <lable for="pp" class="form-input-label">CODE RELAY</lable>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="tech" id="db" value="code_cracking">
                    <label for="pp" class="form-input-label">CODE CRACKING</label>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="tech" id="wc" value="tech_quiz">
                    <lable for="pp" class="form-input-label">TECH-QUIZ</lable>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="tech" id="tq" value="web_creation">
                    <lable for="pp" class="form-input-label">WEB CREATION</lable>
                    <input type="checkbox" class="form-check-input" name="tech" id="none" value="">
                    <lable for="pp" class="form-input-label">NULL</lable>
            
                </div>
            <br>
            
            
            
                <div class="form-group mb-4">
                    <label>NON_Technical Event:</label> &nbsp;<br>
                    <input type="checkbox" class="form-check-input" name="non_tech" id="da" value="digital_art">
                    <label for="pp" class="form-input-label">DIGITAL ARTS</label>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="non_tech" id="rm" value="reels_making">
                    <lable for="pp" class="form-input-label">REELS MAKING</lable>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="non_tech" id="sos" value="sight_on_site">
                    <label for="pp" class="form-input-label">SIGHT ON SITE</label>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="non_tech" id="th" value="treasure_hunt">
                    <lable for="pp" class="form-input-label">TREASURE HUNT</lable>
                    &nbsp;
                    <input type="checkbox" class="form-check-input" name="non_tech" id="tc" value="tech_connection">
                    <lable for="pp" class="form-input-label">TECH CONNECT</lable>
                    <input type="checkbox" class="form-check-input" name="non_tech" id="none" value="">
                    <lable for="pp" class="form-input-label">NULL</lable>
            
                </div>
                <br>
            
                <div class="form-group mb-3">
                    <label>FOOD:</label> &nbsp;
                    <input type="radio" class="form-check-input" name="food" id="vegetarian" value="vegetarian">
                    <label for="veg" class="form-input-label">VEG</label>
                    
                    <input type="radio" class="form-check-input" name="food" id="nonveg" value="nonveg">
                    <lable for="nonveg" class="form-input-label">NON VEG</lable>
            
            
            
            
                    
                </div>
                <br>
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
                    <button type="submit"  id="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="form.php" class="btn btn-danger">Cancel</a>
                </div>
                <!-- Popup after submission -->
            <br>
            
                
            <br>
            </form>
            </div>
            </div>
                </div>            
            </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>
    function closeForm(){
    window.location.pathname="regi/form.php";
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