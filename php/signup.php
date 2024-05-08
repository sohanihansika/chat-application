<?php
    session_start();
    include_once "config.php";
    $fname = mysqli_real_escape_string($conn, $_POST['fname']);
    $lname = mysqli_real_escape_string($conn, $_POST['lname']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
   
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
        //check email is valid or not
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){//if email is valid
            //check email is already exist in db or not
            $sql = mysqli_query($conn, "SELECT email FROM users WHERE email ='$email'");
            if(mysqli_num_rows($sql)>0){//if email already exist
                echo "$email -this is not a valid email!!";

            }else{
                //check user upload file or not
                // if(isset($_FILES['image'])){
                //     //if file is uploaded
                //     $img_name = $_FILES['image']['name'];//getting user uploaded img name
                //     $img_type = $_FILES['image']['type'];//getting user uploaded img type
                //     $tmp_name = $_FILES['image']['tmp_name'];//this tempory name is used to save/move file in our folder

                //     //let's explode image and get the last extension like jpg png
                //     $img_explode = explode('.',$img_name);
                //     $img_ext = end($img_explode);//here we get the extension of an user uploaded img file

                //     $extensions = ['png','jpeg','jpg'];//these are some valid img ext and we've store them in array
                    // if(in_array($img_ext,$extensions) === true){//if user uploading img ext is matched with any array extentions
                    //     $time = time(); //this will retirns us current time..
                        
                    //     //let's move the user uploaded img to our particular folder
                    //     $new_img_name = $time.$img_name;

                         //if user upload img move to our folder successfully
                            $status = "Active now"; //once user signed up then his ststus will be active now
                            $random_id = rand(time(),10000000); //creating random id for user

                            //let's insert all user data inside table
                            // $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id,fname,lname,email,password,img,status)
                            //                     VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$new_img_name}','{$status}')");
                            
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id,fname,lname,email,password,status)
                                                VALUES ({$random_id},'{$fname}','{$lname}','{$email}','{$password}','{$status}')");

                            if($sql2){ //if these data inserted
                                $sql3 =mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3)>0){
                                    $row = mysqli_fetch_assoc($sql3);
                                    $_SESSION['unique_id']=$row['unique_id'] ;//using this session we used inique_id in other php files
                                    echo "success";
                                }

                            }else{
                                echo "Somthig went wrong!";

                            }
                        
                        
                       
                    // }else{
                    //     echo "Please select an Image file-jpeg,jpg,png!";
                    // }

                // }else{
                //     echo "please select an image file!";
                // }
            }


        }else{
            echo "$email - this is not a valid email!";
        }

    }else{
        echo " All input fields are required";
    }

?>