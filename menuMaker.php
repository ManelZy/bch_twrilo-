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
    <link rel="stylesheet" href="css/style3.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"  />
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
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

                    <li >
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="orders.html">Orders & Reservations</a>
                    </li>
                    
                    <li class="active">
                        <a href="menuMaker.html">Menu Maker</a>
                    </li>
                    <li>
                        <a href="settings.html">Settings</a>
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
                              <li class="dinone">Contact Us : <i class="fa-solid fa-phone"></i><a href="#">0558810071<a></li>

                                <li class="dinone"><i class="fa-solid fa-envelope"></i>  <a href="#">FOODZ@gmail.com</a></li>

                                <li class="dinone"> <i class="fa-solid fa-location-dot"></i> <a href="#">dar el beida zone industrielle, Algiers</a></li>
                                <li class="dinone">
                                  <div class="dropdown">
                                     <a href="about.html"><img src="images/log.png" width="30" 
                                      height="30"/></a> 
                                    <div class="dropdown-content">
                                      <a href="settings.html">Settings</a>
                                      <a href="home.html">Sign Out</a>
                                    

                                      
                                    </div>
                                  </div>  </li>
                               
                                
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
<div class="blog">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title">
          <i><img src="images/menuu.png" width="50" 
            height="50" alt="#"/></i>
          
          <span>Introducing FOODZ menu maker</span>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/menu3.jpg" alt="#"/>
             
            </figure>
          </div>
          <h3>Design your business’s menu with Menu Maker</h3>
          <p>Easily create, edit, and update all parts of your menu, so you can serve up exactly what your customers want. Menu Maker is a fast, flexible tool built right into our platform. </p>
        </div>
      </div>
      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/menu2.jpg" alt="#"/>
             
            </figure>
          </div>
          <h3>Bring your offerings to life</h3>
          <p>See how easy it is to create, customize and change your menu to appeal to everyone’s palate. Specify the category of each element in your menu with some description of the made-of ingredients.  </p>
        </div>
      </div>
       <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mar_bottom">
        <div class="blog_box">
          <div class="blog_img_box">
            <figure><img src="images/menu.jpg" alt="#"/>
             
            </figure>
          </div>
          <h3>Building your menu is a piece of cake</h3>
          <p>We’ll help create your menu and give you the tools to update it as needed in a few easy-to-follow steps. Add or remove items, upload photos, update prices, change menu categories, and more.</p>
        </div>
      </div>
      
    </div>
  </div>
  <div class="footer">
            <div class="container-fluid">
                <div class="row">
                  <div class=" col-md-12">
                    <h2>Click on add to start </h2>
                  </div>
                  <div class="col-md-12">
                    <div class="new">
                        
                        <form class="newtetter">
                            <input class="tetter" placeholder="Search dish name" type="text" name="Your email">
                            <button class="submit"><img src="images/search_icon.png" alt="srch"></button>
                        </form>
                        <button class="add"><a href="addMenu.html">+add</a></button>
                    </div>
                </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                      
                        <form class="main_form">
                          
                            <table style="width: 1000px">
                                <tr>
                                  <th>Name</th>
                                  <th>Price</th> 
                                  <th>Category</th>
                                </tr>
                                <tr>
                                  <td>Chicken Sandwich</td>
                                  <td>200.00 dzd</td> 
                                  <td>Sandwiches</td>
                                </tr>
                                <tr>
                                  <td>Chicken Pizza</td>
                                  <td>400.00 dzd</td> 
                                  <td>Pizza</td>
                                </tr>
                                <tr>
                                  <td>Virgin Mojito</td>
                                  <td>450.00 dzd</td> 
                                  <td>Drinks</td>
                                </tr>
                                <tr>
                                  <td>French Fries</td>
                                  <td> 150.00 dzd</td> 
                                  <td>Sides</td>
                                </tr>
                                <?php
                          while($row=mysqli_fetch_assoc($all_product)){
                          ?> 
                                <tr>
                                  <td><?php echo $row["dish_name"];?></td>
                                  <td><?php echo $row["dish_price"];?><span>.00 dzd</span></td> 
                                  <td><?php echo $row["dish_categ"]; ?> </td>
                                </tr>
                                <?php
                                }
                               ?>
                              </table>
                              
                        </form>
                    </div>
                    
                </div>
                <div class="row">
                    <div class="col-md-12">
                        
                    </div>
                    <div class="col-md-12">
                        <ul class="lik">
                            
                        </ul>
                    </div>
                   
                </div>
            </div>
            
        </div>
</div>
<!-- end blog -->


    <!-- footer -->
    <fooetr>
        <div class="footer">
          
          <div class="accord">
            <div class=" col-md-12">
              <h3>Frequently asked questions </h3>
            </div>
            
                     <button class="accordion">How do I access Menu Maker?</button>
                    <div class="panel">
                     <p>You can access Menu Maker by signing in to FOODZ Manager, then clicking Menu in the left sidebar</p>
                    </div>

                   <button class="accordion">I have multiple store locations on the FOODZ website. Can I make changes to all store menus at the same time?</button>
                   <div class="panel">
               <p>At this time, menus for different store locations will need to be updated individually. Menu Maker cannot currently make menu edits that span multiple store locations.</p>
               </div>

                <button class="accordion">How long does it take for changes that I make in Menu Maker to go live?</button>
               <div class="panel">
              <p>Any change saved in Menu Maker will be live to customers right away.</p>
           </div>
       
          </div>
            <div class="copyright">
              <div class="footer_logo">
                
              </div>
                <div class="container">
                    <p><a href="home.html"><img src="images/FOODZ-2.png" width="100" 
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
        <script>

          acc = document.getElementsByClassName("accordion");
        var i;
        
        for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function() {
        /* Toggle between adding and removing the "active" class,
        to highlight the button that controls the panel */
        this.classList.toggle("active");
        
        /* Toggle between hiding and showing the active panel */
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
         panel.style.display = "none";
        } else {
         panel.style.display = "block";
        }
        });
        }
        </script>
       
       

</body>


</html>
