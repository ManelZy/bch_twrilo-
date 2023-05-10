<?php


// restaurant owner sign up php page 


//Database configuration
include'connect.php';

        $owner_name =$_POST['Name'];
        $email=$_POST['Email'];
        $pass=$_POST['Password'];
        $tlf_num=$_POST['Phone'];
        $owner_address=$_POST['Personal_Address'];
        $allergy=$_POST['myCheckboxName'];
        $store_name=$_POST['Store_Name'];
        $store_address=$_POST['Store_Address'];
        $business=$_POST['Business'];
        $fileName = $_FILES['Image']['name'];
        $fileTmpName = $_FILES['Image']['tmp_name'];
        $filesize = $_FILES['Image']['size'];
        $fileError = $_FILES['Image']['error'];
        $fileType = $_FILES['Image']['type'];
        $fileExt = explode('.', $fileName);
        $fileActualExt = strtolower(end($fileExt));
        $allowed = array('jpg','jpeg','png');
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($filesize < 1000000) {
                    $fileNameNew = uniqid('', true).".".$fileActualExt;
                    $fileDestination = 'uploads/' . $fileNameNew;
                    $image = 'uploads/'.$fileNameNew;
                    move_uploaded_file($fileTmpName, $fileDestination);
                } else {
                    echo "Your file is too big!";
                }
            } else {
                echo "There was an error uploading your file!";
            }
        } else {
            echo "You cannot upload files of this type!";
        }

        $sql = "select * from users where email = '$email'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        if($count>=1)
        {

            echo  '<script>
            window.location.href = "Owner.html";
            alert("email already exists !!")
              </script>';


        }


       else
       {







  
        // prepare the mysql query statement and bind parameters
        $pwd_hash = password_hash($pass,PASSWORD_DEFAULT);
        $sql = "INSERT INTO users(user_full_name , email , pass , tlf_num , user_address , allergy ,profile_type  ) VALUES ('$owner_name' ,'$email' ,'$pwd_hash' ,'$tlf_num' , ' $owner_address' , '$allergy' , 'owner');";
        $result=mysqli_query($conn,$sql);
    
        
        $stm = "INSERT INTO restaurant(email , store_name ,store_address ,phone_num ,business ,rest_img) VALUES ('$email' , '$store_name' , '$store_address' , '$tlf_num' , '$business', '$image');";
        $result1=mysqli_query($conn,$stm);

        if($result)
        {
            header("Location: menuMaker.php");
        }
        else
        {
            echo  '<script>
            window.location.href = ".html";
            alert("Login failed. Invalid username or password!!")
        </script>';
        }
        
        
        

        }


        ?>