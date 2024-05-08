<?php
    session_start();
    if(isset($_SESSION['unique_id'])){//if user is logged in
        header("location:users.php");
    }
?>

<?php include_once "header.php";?>
    <body>
        <div class="wrapper">
            <section class="form signup">
                <header>Realtime Chat App</header>
                <form action="php/signup.php" enctype="multipart/form-data" autocomplete="off" method="POST">
                    <div class="error-txt"></div>
                    <div class="name-details">
                        <div class="field input">
                            <lable>First Name</lable>
                            <input type="text" name="fname" placeholder="First Name" required>
                        </div>
                        <div class="field input">
                            <lable>Last Name</lable>
                            <input type="text" name="lname" placeholder="Last Name" required>
                        </div>
                    </div>
                    <div class="field input">
                        <lable>Email Address</lable>
                        <input type="text" name="email" placeholder="Enter your Email" required>
                    </div>
                    <div class="field input">
                        <lable>Password</lable>
                        <input type="password" name="password" placeholder="Enter new Password" required>
                        <i class="fas fa-eye"></i>
                    </div>
                    <!-- <div class="field image">
                        <lable>Select Image</lable>
                        <input type="file" name="image" required>
                    </div> -->
                    <div class="field button">
                        
                        <input type="submit" value="Continue to chat">
                    </div>
                    
                </form>
                <div class="link">Already singed up?<a href="login.php">Login now</a></div>
            </section>

        </div>
        <script src="js/paswordhiide.js"></script>
        <script src="js/signup.js"></script>
    </body>
</html>