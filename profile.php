<?php
    // database connection
    include_once'connect.php';




      $id="";
      $customer_name ="";
      $email ="";
      $tlf_num = "" ;
      $cus_address = "";
      $allergy ="";
      $chk = "";
      $pass ="";

      
      if ($_SERVER['REQUEST_METHOD']=='GET'){
      // GET method: Show the data of the user
      if (!isset($_GET["user_id"])) {
      header("location: customer_sign_up.php");
      exit;
      }
      
      $id= $_GET["user_id"];
      // read the row of the selected user from database table 
      $sql = "SELECT * FROM users WHERE user_id=$id";
      $result = $connection->query($sql);
      $row = $result->fetch_assoc();
      if (!$row) {
        header("location: index.php");
        exit;
        }
    }
    
      else {
      $customer_name = $_POST['Name'];
      $email = $_POST['Email'];
      $tlf_num =  $_POST['Phone'];
      $cus_address = $_POST["Address"];
      $allergy =$_POST["myCheckboxName"];
      $chk = "";
      $pass =$_POST["Password"];
      

    do{
      if (empty($id) || empty($customer_name) || empty($email) || empty($tlf_num) || empty($cus_address) || empty($allergy) ) { echo "All the fields are required";
        break;
        }

        $hashed_password = password_hash($pass, PASSWORD_DEFAULT);
  
      foreach ($allergy as $chk1) {
          $chk .= $chk1 . ",";
      }

        $sql="UPDATE users 
         SET user_name = '$customer_name', email = '$email', tel_num = '$tlf_num', user_address = '$cus_address' , allergy='$chk' , pass='$hashed_password'
         WHERE user_id = $id "; 
     } while (false);

        $result= mysqli_query($conn,$sql);
        if (!$result) {
            echo " invalid query";
            exit;
            }

            echo "profile updated succesully";

            header("location: login.php");
            exit;




      }
      
     
  
      mysqli_close($conn);
    
  
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>FOODZ©</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="profile.css">
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
    <link rel="stylesheet" href="./css/feedback.css">
    <link rel="stylesheet" href="./css/account.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>










<body class="main-layout">
   

    <div class="sidebar">
           <!-- Sidebar  -->
           <nav id="sidebar">

               <div id="dismiss">
                   <i class="fa fa-arrow-left"></i>
               </div>

               <ul class="list-unstyled components">

                   <li class="active">
                       <a href="home.html" class="gg">Home</a>
                   </li>
                   <li>
                       <a href="about.html "class="gg">About Us</a>
                       
                   </li>
                   <li>
                       <a href="recipe.html" class="gg">Restaurants</a>
                   </li>
                   <li>
                       <a href="blog.html"class="gg">Add your restaurant </a>
                   </li>
                   <li>
                       <a href="contact.html"class="gg">Contact Us</a>
                   </li>
               </ul>

           </nav>
       </div>

   <div id="content">
   <!-- header -->
   <header>
       <div class="container-fluid">
           <div class="row">
               <div class="col-md-3">
                   <div class="full">
                       <a class="logo" href="index.html"><h1> FOODZ.</h1></a>
                   </div>
               </div>
               <div class="col-md-9">
                   <div class="full">
                       <div class="right_header_info">
                           <ul>
                        

                           </ul>


                               <div class="header_right">

                                  
                                   <button type="button" id="sidebarCollapse">
                                       <i class="fa-solid fa-bars fa-2x"></i>
                                   </button>
                               </div>  
                               <div class="dropdown">
                                   <button onclick="myFunction()" class="dropbtn"   ><i class="fa-solid fa-circle-user fa-2x"></i></button>
                                   <div id="myDropdown" class="dropdown-content">
                                     <a href="#">sittings</a>
                                     <a href="#">sign out </a>
                                     
                                   </div>
                                 </div>
                                 
                                         
                       </div>
                   </div>
               </div>
           </div>
       </div>

      

      
   </header>

    


<div class="container p-0">
    <div class="row">
    <div class="col-md-5 col-xl-4">
    <div class="card">
    <div class="card-header">
 
    </div>
    </div>
    </div>
    <div class="col-md-7 col-xl-8">
    <div class="tab-content">
    <div class="tab-pane fade show active" id="account" role="tabpanel">
    <div class="card">
    <div class="card-header">
    <div class="card-actions float-right">
    <div class="dropdown show">
    <a href="#" data-toggle="dropdown" data-display="static"></a>
    
    </div>
    </div>
    <h5 class="card-title mb-0">Personel info</h5>
    </div>
    <div class="card-body">
    <form method="post" >
    <input type="hidden" value="<?php echo  $id; ?>">
    <div class="row">
    <div class="col-md-8">
    <div class="form-group">
    <label for="inputUsername">Username</label>
    <input type="text" name="Name"class="form-control" id="inputUsername" placeholder="Username" value=" <?php echo  $name; ?> ">
    </div>

    
    <div class="form-group">
    <label for="inputEmail4">Email</label>
    <input type="email" name="Email"class="form-control" id="inputEmail4" placeholder="Email" value="<?php echo  $email; ?> ">
    </div>
    <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" name="Address"class="form-control" id="inputAddress" placeholder="1234 Main St" value="<?php echo  $address; ?> ">
    </div>
    
    <div class="form-row">
    <div class="form-group col-md-6">
    <label for="inputCity">Phone number</label>
    <input type="text" name="Phone"class="form-control" id="inputCity"placeholder="+213" value="<?php echo  $phone; ?> ">
    </div>
    
    
    
    
    
    
    <div class="form-group">
    <label for="inputPasswordNew">New password</label>
    <input type="password" name="Password"class="form-control" id="inputPasswordNew" placeholder="enter new password" value="<?php echo  $password; ?> ">
    </div>


    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >
        <div class ="c1"><span>  Dietary  </span><br>
    </div>
    
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" > 
       
       <label class= "checkbox" for= "myCheckboxId1">
        <input checked class="checkbox__input" type="checkbox" name="myCheckboxName" id= "myCheckboxId1" value="<?php echo  $myCheckboxName; ?> ">
        <div class="checkbox__box"></div>  

        Gluten-Free
        
       </label>
    </div>   
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >   
       <label class= "checkbox" for= "myCheckboxId2">
        <input checked class="checkbox__input" type="checkbox" name="myCheckboxName" id= "myCheckboxId2" value="<?php echo  $myCheckboxName; ?> ">
        <div class="checkbox__box"></div>
        Vegetarian
       </label>
    </div>   
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >   
       <label class= "checkbox" for= "myCheckboxId3">
        <input checked class="checkbox__input" type="checkbox" name="myCheckboxName" id= "myCheckboxId3"value="<?php echo  $myCheckboxName; ?> ">
        <div class="checkbox__box"></div>
        Vegan
        
       </label> 
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12" >   
        <label class= "checkbox" for= "myCheckboxId4">
         <input checked class="checkbox__input" type="checkbox" name="myCheckboxName" id= "myCheckboxId4" value="<?php echo  $myCheckboxName; ?> ">
         <div class="checkbox__box"></div>
         Healthy
        </label>
     </div>   






    
    <button type="submit" class="btn btn-primary" value="edit">Save changes</button>
    </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div> 










    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
     <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
  
     <script src="js/jquery-3.0.0.min.js"></script>
   <script type="text/javascript">
        $(document).ready(function() {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#dismiss, .overlay').on('click', function() {
                $('#sidebar').removeClass('active');
                $('.overlay').removeClass('active');
            });

            $('#sidebarCollapse').on('click', function() {
                $('#sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <style>
    #owl-demo .item{
        margin: 3px;
    }
    #owl-demo .item img{
        display: block;
        width: 100%;
        height: auto;
    }
    </style>

     
      <script>
         $(document).ready(function() {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
             margin: 10,
             nav: true,
             loop: true,
             responsive: {
               0: {
                 items: 1
               },
               600: {
                 items: 2
               },
               1000: {
                 items: 5
               }
             }
           })
         })
      </script>







<script>
  
function myFunction() {
document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
if (!event.target.matches('.dropbtn')) {
  var dropdowns = document.getElementsByClassName("dropdown-content");
  var i;
  for (i = 0; i < dropdowns.length; i++) {
    var openDropdown = dropdowns[i];
    if (openDropdown.classList.contains('show')) {
      openDropdown.classList.remove('show');
    }
  }
}
}
</script>


</body>
</html>

