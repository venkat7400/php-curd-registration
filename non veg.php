<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TECHCRUZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
  </head>
  <body>
 

  
    <div class="container">
      
        <div class="row">
            <div class="card mb-8 sm-4">
                <div class="card-header">
                <a href="filter.php" class="btn btn-dark mb-3 hidden-print" >GO BACK</a>
                <a href="add.php" class="btn  btn-primary mb-3" >DELETE/EDIT</a>
                <a href="index.php" class="btn btn-danger mb-3" >HOME</a>
                                   
                    <h4 id="printremove" class="card-title">
                       FOOD FILTERATION
                    </h4>
                    <div class="card-body mb-8 ">
                        <form action="" method="post">
                            <div class="row print-container">
                                <div class="col-md-8 ">
                                    <div class="form-group ">
                                        <input type="text"name="filter_value" id="printremove"  class="form-control" placeholder="search&filter record">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" name="filter_btn" class="btn  btn-primary">FILTER DATA </button>
                                    
                                </div>
                               
                                <br>
                               
                            </div>
                        </form>
                        <table class=" table table-bodered mb-8 ">
                          <thead >
                            <tr>
                              <th scope="col">ID</th>
                              <th scope="col">NAME</th>
                              <th scope="col">COLLEGE_NAME</th>
                              <th scope="col">DEPARTMENT</th>
                              <th scope="col">FOOD</th>
                              
                             
                            </tr>
                          </thead>
                          <tbody>
                            <?php
                                $connection=mysqli_connect("localhost","root","","tech23");
                            if(isset($_POST['filter_btn']))
                            {
                                $value_filter = $_POST['filter_value'];
                                $query = "SELECT * FROM `student_data` WHERE CONCAT(`first_name`,`food`)LIKE  '%$value_filter%' ";
                                $query_run =mysqli_query($connection , $query);
                                if(mysqli_num_rows($query_run)>0)
                                {
                                    while($row = mysqli_fetch_array($query_run))
                                    {
                                       
                                        ?>
                                           <tr >
                                                <td><?php echo $row['id'] ?></td>
                                                <td><?php echo $row['first_name'] ?></td>
                                                <td><?php echo $row['collage_name'] ?></td>
                                                <td><?php echo $row['department'] ?></td>
                                                
                                                <td><?php echo $row['food'] ?></td>
                                                
                                                
                                             </tr>
                                        <?php
                                    }

                                }
                                else
                                {
                                   ?>
                                   <tr>
                                   <td colspan="11">NO RECORD FOND</td>
                                    </tr>
                                    <?php
                                    
                                }
                            }
                            ?>



                           
                            </tbody>
                        </table>
                        <div class="col-md-6">
                                   
                                    <button onclick="printList()"class="btn btn-primary  mb-3"id="print-btn">PRINT</button>
                                </div>

                             


                    </div>
                 </div>
            </div>
           
                                
                       
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
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
    <!-- for printing -->
<script src="index.js" defer></script>
  </body>
</html>