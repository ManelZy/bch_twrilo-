<?php
require_once 'connect.php';

$sql = "SELECT * FROM restaurant WHERE business = 'Restaurant'";
$all_rst = $conn->query($sql);
$sqll = "SELECT * FROM restaurant WHERE business = 'coffe_shop'";
$all_coffee = $conn->query($sqll);

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
    <!-- owl css -->
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style6.css">
   
    
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.7.4/dist/css/foundation.min.css">
    
    
    

   

   
    
</head>
<!-- body -->

<body class="main-layout blog_page">
    
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/pizza.gif" alt="" /></div>
    </div>

    <div class="wrapper">
    <!-- end loader -->
    
    
    <div class="sidebar">
        <!-- Sidebar  -->
        <nav id="sidebar">

            <div id="dismiss">
                <i class="fa fa-arrow-left"></i>
            </div>

            <ul class="list-unstyled components">

               
                <li>
                    <a href="#">My Orders</a>
                </li>
                
                <li class="active">
                    <a href="restaurants.html">Nearby Restaurants</a>
                </li>
                <li>
                    <a href="settingsCustomer.html">Settings</a>
                </li>
                <li >
                    <a href="home.html">Log Out</a>
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
                          <a class="logo" href="home.html"><h1> FOODZ.</h1></a>
                            </div>
                        </div>
        
        <div class="col-md-9">
            <div class="full">
                <div class="right_header_info">
                   
                   
                <ul>
                    
                    <li>
                        <form action="search.php" class ="searchBar" method="get">
                            <input type="text" placeholder="Food, drinks, etc" name="q">
                            <button type= "submit"><img src="images/search.png" alt="#" ></button>
                        </form>
                     </li>
                     <li class="cart"><img src="images/trolley.png" alt="#"> <a>.0</a></li>
                    <li class="dinone">
                      <div class="dropdown">
                          <a href="about.html"><img src="images/log.png" width="30" 
                          height="30"/></a> 
                         <div class="dropdown-content">
                              <a href="settingsCustomer.html">Settings</a>
                              <a href="home.html">Sign Out</a>
                            </div>
                      </div>  
                   </li>
                 
                  
                  <li>
                      <button type="button" id="sidebarCollapse">
                          <i class="fa-solid fa-bars"></i>
                      </button>
                  </li>
                </ul>
                     </div>
                  </div>
              </div>
          </div>
      </div>
        
    </header>
    
    <!-- end header -->

    
  
<div class="yellow_bg">
   <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="title">
                    
                     <img src="images/pizza.png" alt="#">
                     <img src="images/hamburger.png"  alt="#">
                     <img src="images/kebab.png"  alt="#">
                     <img src="images/sushi.png"  alt="#">
                     <img src="images/fried-potatoes.png"  alt="#">
                     <img src="images/fried-chicken.png" alt="#">
                     <img src="images/sushi.png"  alt="#">
                     <img src="images/coffee-cup-2.png"  alt="#">
                     <img src="images/drink-2.png"  alt="#">
                    
                  </div>
               </div>
            </div>
          </div>
</div>

<!-- blog -->
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/plate.png" width=100 height=100 alt="#"/></i>
          
          <span>Your culinary adventure awaits.</span>
        </div>
      </div>
    </div>
    <section class="restaurants" id="restaurants">
        
    <div class="box-container">
        <?php
        while($row=mysqli_fetch_assoc($all_rst)){
        ?>
     <div class="box">
        
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="<?php echo $row["rest_img"];?>">
        <h3><?php echo $row["store_name"];?></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <?php
        }
        ?>

     <div class="box">
        <span class="price"> -20% </span>
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-ella-olsson-1640774.jpg">
        <h3>I Love Veggies</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            </div>
        
        <a href="#" class="btn">Menu</a>
        
     </div>
     
     <div class="box">
        <span class="price"> free shipping </span>
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-julie-aagaard-2097090.jpg">
        <h3>Healthy me</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>

     <div class="box">

        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/istockphoto-520490716-612x612.jpg">
        <h3>The Sea Food</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <div class="box">
        <span class="price"> new </span>
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-photo-4877838.jpeg">
        <h3>King of Shawarma</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <div class="box">
        <span class="price"> -5% </span>
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-photo-2725744.jpeg">
        <h3>Yummy food</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <div class="box">

        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-photo-1146760.jpeg">
        <h3>Pizza Italiano</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <div class="box">
        <span class="price"> new </span>
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-photo-2454533.jpeg">
        <h3>Happy Meal</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <div class="box">
        <span class="price"> -30% </span>
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-photo-1893555.jpeg">
        <h3>Real FrittenWerk </h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <div class="box">
      <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/pexels-photo-1653877.jpeg">
        <h3>la casa del pizza</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
      </div>
     
    
    </div>
    
  </div>
  <div class="yellow_bg">
    <div class="container">
             <div class="row">
                <div class="col-md-12">
                   <div class="title">
                     
                     
                   </div>
                </div>
             </div>
           </div>
 </div>

 
<!-- blog2 -->
<div class="blog">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title">
            <i><img src="images/coffee-cup.png" width="100px" height="100px" alt ="#" ></i>
            
            <span>Bringing energy to your mornings.</span>
          </div>
        </div>
       </div>
     <section class="restaurants" id="restaurants">
          
       <div class="box-container">
        <?php
        while($row=mysqli_fetch_assoc($all_coffee)){
        ?>
     <div class="box">
        
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="<?php echo $row["rest_img"];?>">
        <h3><?php echo $row["store_name"];?></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
     <?php
        }
        ?>
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <img src="images/pexels-photo-1813466.jpeg">
          <h3>Coffee Gusta</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
              </div>
          
          <a href="#" class="btn">Menu</a>
          
       </div>
  
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <img src="images/pexels-photo-302896.jpeg">
          <h3>Coffee boost</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
    
          <a href="#" class="btn">Menu</a>
          
       </div>
  
       
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <img src="images/pexels-photo-175711.jpeg">
          <h3>coffee's lovers</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
          <a href="#" class="btn">Menu</a>
          
       </div>
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <span class="price"> -15% </span>
          <img src="images/pexels-photo-1065030.jpeg">
          <h3>happy morning</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
          <a href="#" class="btn">Menu</a>
          
       </div>
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <span class="price"> -25% </span>
          <img src="images/pexels-photo-2551794.jpeg">
          <h3>kahwa w tahliya</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
          <a href="#" class="btn">Menu</a>
          
       </div>
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <img src="images/pexels-photo-1855214.jpeg">
          <h3>Le petit dejeuner</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
          <a href="#" class="btn">Menu</a>
          
       </div>
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
          <span class="price"> new </span>
          <img src="images/pexels-photo-2668498.jpeg">
          <h3>morning shots</h3>
          <div class="stars">
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star checked"></span>
              <span class="fa fa-star"></span>
              <span class="fa fa-star"></span>
          </div>
          <a href="#" class="btn">Menu</a>
          
       </div>
       <div class="box">
        <i class="fa fa-heart-o add-to-cart"></i>
        <img src="images/istockphoto-960924058-612x612.jpg">
        <h3>Kahwat Zeman</h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Menu</a>
        
     </div>
      
    </section><br>  
      
    </div>

    

</div>
<!-- end blog -->


    <!-- footer -->
    <fooetr>
        <div class="footer">
            
            <div class="copyright">
                <div class="container">
                  
                     <p><a href="index.html"><img src="images/FOODZ-2.png" width="100" 
                      height="100" alt="#"/></a>FOODZ© 2023 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </fooetr>
    <!-- end footer -->

    </div>
    </div>
    <div class="overlay"></div>
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
        }); </script>
        
    </script>
    

</body>

</html>
