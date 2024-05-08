<?php
    session_start();
    if(isset($_SESSION['unique_id'])){//if user is logged in
        header("location:users.php");
    }
?>

<?php include_once "header.php";?>
    <body>
        <div class="wrapper">
            <section class="form login">
                <header>Realtime Chat App</header>
                <form action="#">
                    <div class="error-txt"></div>
                    
                    <div class="field input">
                        <lable>Email Address</lable>
                        <input type="text" name="email" placeholder="Enter your Email">
                    </div>
                    <div class="field input">
                        <lable>Password</lable>
                        <input type="password" name="password" placeholder="Enter your Password">
                        <i class="fas fa-eye"></i>
                    </div>
                    
                    <div class="field button">
                        <lable>Last Name</lable>
                        <input type="submit" value="Continue to chat">
                    </div>
                    
                </form>
                <div class="link">Not yet singed up?<a href="index.php">Signup now</a></div>
            </section>

        </div>
        <script src="js/paswordhiide.js"></script>
        <script src="js/login.js"></script>
    </body>
</html>