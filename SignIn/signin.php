
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, intial-scale=1">
    <title>Signin </title>
    <link rel="stylesheet" type="text/css" href="signin_style.css">   
</head>
    <body>
        <div class="login-box">
        <img src="avatar.png" class="avatar">
           <h1>Sign In</h1>
                <form name="fr" action="loginact.php" method="POST">
                    <p>Username</p>
                    <input type="text" name="usr" placeholder="Enter Username">
                    <p>Password</p>
                    <input type="password" name="pwd" placeholder="Enter Password">
                    <input type="submit" name="submit" value="Login" onclick="checkdata()">
                    <center><a href="forget.html">Forget Password</a><br><br></center>
                    <center><a href = "../Signup/signup.html">Sign Up</a></center>
                    <div style="color:red;">
                    <?php
                        if(isset($_GET['nouserregistered'])){
                            echo 'User is not registered.';
                        } elseif(isset($_GET['wrongpassword'])){
                            echo 'Wrong password';
                        }
                    ?>
                    </div>
                </form> 
        </div>
    </body>
        <script type="text/javascript">
        function checkdata(){
            var n = document.fr.usr.value;
            var p = document.fr.pwd.value;

            if(n==""||p==""){

            alert("Username/Password empty");
        
            }

            else{

                if(p.length<=7){

                    alert("The entered password must have length grater than 8 characters")

                }


            }
        }
        </script>
</html>