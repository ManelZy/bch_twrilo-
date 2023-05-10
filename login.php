<?php

// LOGIN PAGE 
   

//Database configuration
include_once'connect.php';


        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $owner="owner";
        $customer="customer";
     
    
        // prepare the mysql query statement and bind parameters
        
        
        $sql = "select * from users where email = '$email'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if(password_verify($pass , $row['pass']))

        {
        if($count == 1 && $row['profile_type']==$owner){  
            header("Location: menuMaker.php");
        }  

        elseif($count == 1 && $row['profile_type']==$customer)
       
        {
            header("Location: restaurants.html");
        }
        else
        {
            echo  '<script>
                        window.location.href = "login.html";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
        }

         }
         else
         {
            echo  '<script>
                        window.location.href = "login.html";
                        alert("Login failed. Invalid username or password!!")
                    </script>';
         }

      


         

        ?>
