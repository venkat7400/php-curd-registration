<?php 
include ("db_conn.php");


	if (isset($_POST['submit'])) {
		
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



        

		

		$sql = "INSERT INTO `student_data`(`first_name`, `collage_name`,`department`, `email`,`phone_number`, `gender`,`tech`,`non_tech`,`food`,`pay`) VALUES ('$first_name','$collage_name','$department','$email','$phone_number','$gender','$tech','$non_tech','$food','$pay')";


        // print_r($sql);
        // die;

		

		$result = $conn->query($sql);

		if ($result == TRUE) {
			echo "New record created successfully.";
		}else{
			echo "Error:";
		}

		$conn->close();




  $conn->close();
}


	


    ?>




    










<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet"> -->
    
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  

    
    
    <title>TECHCRUZ</title>
</head>
<body>

<!-- <nav class="navbar navbar-light justify-content-center fs-3 mb-5"style="background-color: #90ff5573;"> -->



     

<!-- </nav> -->
<div class="container-fluid">




  
    <?php
    if(isset($GET['msg'])){
        $msg = $_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show"role="alert">'.$msg.'<button type="button" class="btn-close" data-bs-dismiss="alert"aria-label="close"</button></div>';
    }
    ?>






        <div class="row">
            <div class="card">
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
               <a href="form.php" id="1">ADD NEW DATA
               
               </a>
               
            </li>
         
            
            <li><a href="filter.php">FILTER</a></li>
            
         </ul>
      </nav>
                <div class="card-header">
                <br>
                <br>
                <!-- <a href="form.php" class="btn btn-dark mb-2 " >ADD NEW</a>
                <a href="filter.php" class="btn  btn-primary mb-2 " >SEARCH!SELECT</a> -->
                <h4 class="card-title">
                        STORED DATA..... MAKE A EDIT OR DELETE
                    </h4>
                    
                    <div class="card-body">
   
                    <table class=" table table-bodered col-md-8 ">
                          <thead>
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">COLLAGE_NAME</th>
                              <th scope="col">DEPARTMENT</th>
                              <th scope="col">EMAIL</th>
                              <th scope="col">PHONE_NUMBER</th>
                              <th scope="col">GENDER</th>
                              <th scope="col">TECH</th>
                              <th scope="col">NON_TECH</th>
                              <th scope="col">FOOD</th>
                              <th scope="col">PAY</th>
                              <th scope="col">EDIT</th>
                              <th scope="col">DELETE</th>
                            </tr>
                          </thead>
                          <tbody>
  
  <?php
  $sql = "db_conn.php";
    $sql= "SELECT * FROM `student_data`";
    $result= mysqli_query($conn,$sql);
    while($row = mysqli_fetch_assoc($result)) {
        ?>
          
         <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row['collage_name'] ?></td>
            <td><?php echo $row['department'] ?></td>
            <td><?php echo $row['email'] ?></th>
            <td><?php echo $row['phone_number'] ?></td>
            <td><?php echo $row['gender'] ?></th>
            <td><?php echo $row['tech'] ?></td>
            <td><?php echo $row['non_tech'] ?></td>
            <td><?php echo $row['food'] ?></td>
            <td><?php echo $row['pay'] ?></td>
            <td><a href="edit.php? id=<?php echo $row['id'] ?>" class="link-dark" id="print-btn"><i class="fa-solid fa-pen-to-square fs-5 me-3"></td>
            <td><a href="delete.php? id=<?php echo $row['id'] ?>" class="link-dark"id="print-btn"><i class="fa-solid fa-trash fs-5 me-3"></td>
    
         </tr>
        <?php

    }
    ?>



    
   
</tbody>
</table>
</div>
</div>





    
</body>
<script src="https://kit.fontawesome.com/238df00a21.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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