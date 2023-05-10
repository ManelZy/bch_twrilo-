<?php
require_once 'connect.php';

$sql= "SELECT * FROM products";
$all_product = $conn->query($sql);

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
                    <a href="restaurants.html">Nearby Restaurants</a>
                </li>
                
                <li class="active">
                    <a href="menu.php">See Menu</a>
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
                        <form action="" class ="searchBar">
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
                              <a href="#">Settings</a>
                              <a href="index.html">Sign Out</a>
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

    


<!-- blog -->
<body>
<div class="blog">
  <div class="container">
    
            <button type="button" id="backButton"><a href="restaurants.html"   class="btn"> See Restaurants </a></button>
        
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/shopping-cart.gif" width=100 height=100 alt="#"/></i>
          
          <span>Add some delicious food to your cart!</span>
        </div>
      </div>
    </div>
    <section class="restaurants" id="restaurants">
        
    <div class="box-container">
        <?php
        while($row=mysqli_fetch_assoc($all_product)){
        ?>
     <div class="box">
        
  
        <img src="<?php echo $row["dish_img"];?>">
        <h3 class="dish_name"><?php echo $row["dish_name"];?></h3>
        <h4 class="dish_desc"><?php echo $row["dish_desc"]; ?> </h4>
        <h3 style="font-weight: 700;"class="dish_price"><?php echo $row["dish_price"];?><span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
       <?php
        }
        ?>

     <div class="box">

      
        <img src="images/foodiesfeed.com_salad-with-shrimps-and-feta-cheese.jpg">
        <h3>Cesar Salad</h3>
        <h4> Tomato, Feta Cheese, Shrimps .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            </div>
        
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     
     <div class="box">
       
        <img src="images/foodiesfeed.com_basic-italian-pizza-margherita.jpg">
        <h3>Pizza Margherita</h3>
        <h4> Tomato, Mozzarilla, Basilic .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>

     <div class="box">

       
        <img src="images/foodiesfeed.com_grilled-cheese-sandwich.jpg">
        <h3>Cheese Sandwich</h3>
        <h4>Cheddar, Mozzarilla, Butter.</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     <div class="box">
      
        <img src="images/pexels-photo-4877838.jpeg">
        <h3>Shawarma</h3>
        <h4>Shawarma, Garlic Sauce .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     <div class="box">
    
       
        <img src="images/pexels-photo-2725744.jpeg">
        <h3>Menu Burger</h3>
        <h4> Tomato, Beef, Onion .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     <div class="box">

      
        <img src="images/foodiesfeed.com_pizza-with-cheese-and-mushrooms.jpg">
        <h3>Mushroom Pizza</h3>
        <h4> Tomato, Mushroom, Cheese .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star "></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     <div class="box">
        
   
        <img src="images/foodiesfeed.com_cheese-burger-with-fried-onion-on-a-tray.jpg">
        <h3>Our VIP Burger</h3>
        <h4> Tomato, Onion, Cheese .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     <div class="box">
        
     
        <img src="images/pexels-photo-1893555.jpeg">
        <h3>Seasoned Fries</h3>
        <h4> Chicken, Tomato, Cheese .</h4>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
     </div>
     <div class="box">
  
        <img src="images/pexels-photo-1653877.jpeg">
        <h3>Chicken Pizza</h3>
        <h3 style="font-weight: 700;">300.00 <span>dzd</span></h3>
        <h4> Tomato, Chicken, Cheddar Cheese .</h4>
        <div class="stars">
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        </div>
        <a href="#" class="btn">Add to cart</a>
        
      </div>
     
    
    </div>
    
  </div>
</body>


 



    <!-- footer -->
    <fooetr>
        
            
            <div class="copyright">
                <div class="container">
                  
                     <p><a href="home.html"><img src="images/FOODZ-2.png" width="100" 
                      height="100" alt="#"/></a>FOODZ© 2023 All Rights Reserved.</p>
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
