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
     

  <div class="content1">
        
         <div class="header">
           DEPARTMENT <br><span> COMPUTER SCIENCE AND ENGINEERING</span>
         </div>
         
      </div>
      <div class="content">
        
         <div class="header">
           WELCOME YOU ALL TO THE TECHCRUZ<br><span> devloped by....Peace Bro's...</span>
         </div>
         <a href="form.php" class="btn btn-dark mb-3" >START REGISTERATION</a>
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
  </body>
</html>