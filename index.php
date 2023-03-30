<?php
$conn = mysqli_connect("localhost","root","","chatthru");
 if(isset($_POST["submit"])){
    $sname = $_POST["ssname"];
    $suname = mysqli_real_escape_string($conn,$_POST["ssuname"]);
    $spasswd = md5($_POST["sspasswd"]);

    $selquery = "SELECT * FROM login WHERE uname = '$suname'";

    $selresult = mysqli_query($conn,$selquery);

    if(mysqli_num_rows($selresult) >0 ){
      $error[] = "user already exists";
      

    }
    else{
      $sql = "INSERT INTO login(nname,uname,passwd) VALUES('$sname','$suname','$spasswd')";
      
      $query = mysqli_query($conn,$sql);
      header("location:/chatthrumain/index.html");
    }
 }





?>


<?php
$con = mysqli_connect("localhost","root","","chatthru");

if(isset($_POST["login"])){

   $uname = mysqli_real_escape_string($conn,$_POST["uname"]);
   $passwd = md5($_POST["passwd"]);

   $sellogquery = "SELECT * FROM login WHERE uname = '$uname' && passwd = '$passwd'";

   $sellogresult = mysqli_query($conn,$sellogquery);

   if(mysqli_num_rows($sellogresult) > 0 ){
      header("location:/chatthrumain/index.html");
   }
   else{
      $errorlog[] = "invalid username or password";
   }
}





 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatThru</title>
    <link rel="stylesheet" href="style.css">
    <script src="index.js"></script>
</head>
<body>
    <div class="login">
        <div class="lbox">
            <div class="llbox" id="log">
                <div class="lllbox">
            <div class="llogo">ChatThru</div>
            <form name="loginform" method="post" action="index.php" onsubmit="return loginvalid()">
            <div class="linput">
            <?php
            if(isset($errorlog)){
                foreach($errorlog as $errorlog){
                    echo "<div class='red'>  .$errorlog. </div>";
                }
            }
            ?>
                <input class="id" type="text" name="uname" id="uuun" placeholder="Enter your Username..." >
                <div class="msg"><div class="red" id="luname">  <?php $error ?></div></div>
                <input class="id" type="password" id="pppw" name="passwd" placeholder="Enter your Password...">
                <div class="msg"><div class="red" id="lpasswd"></div></div>
                <input class="id" id="sub" type="submit" name="login">
                <div class="sup">
                  
                    
                    Don't have an account?<a onclick="login(0)">&nbsp;signup</a>
            </div>
            </div>

          
          
        </form>
       <div class="bottom">
        <div class="dash">
            <hr class="hr" id="hrl"><span class="or">or</span><hr id="hrr" class="hr">
        </div>
        <div class="fblogin">
            <div class="fb"><a href="https://www.facebook.com">Login with facebook</a></div>

        </div>
        </div>
    </div>
        </div>


        <div class="signup">
            <div class="ssbox" id="sign">
                <div class="lllbox">
                <div class="llogo">ChatThru</div>
                <form action="index.php" name="signupform" onsubmit="return signvalid()" method="post">
                <div class="linput">
                <?php
                    if(isset($error)){
                    foreach($error as $error){
                        echo "<div class='red'>  .$error. </div>";
                    }
                }
            ?>
                
                    <input type="text" class="id" name="ssname" id="ssname" placeholder="Enter your name...">
                    <div class="msg"><div class="red" id="sname"></div></div>
                    <input class="id" type="text" name="ssuname" id="ssuname" placeholder="Create Username..." >
                    <div class="msg"><div class="red" id="suname"></div></div>
                    <input class="id" type="password" name="sspasswd" id="sspasswd" placeholder="Enter Password...">
                    <div class="msg"><div class="red" id="spasswd"></div></div>
                    
                    <input type="password" class="id" name="ssrepasswd" id="ssrepasswd" placeholder="Re-enter Password...">
                    <div class="msg"><div class="red" id="srepasswd"></div></div>
                    <input class="id" id="submit" type="submit" name="submit">
                    <div class="sup">
                        Already have an account?<a onclick="login(1)">&nbsp;Login</a>
                </div>
                </div>
    
              
              
            </form>
           <div class="bottom">
            <div class="dash">
                <hr class="hr" id="hrl"><span class="or">or</span><hr id="hrr" class="hr">
            </div>
            <div class="fblogin">
                <div class="fb"><a href="https://www.facebook.com">Login with facebook</a></div>
    
            </div>
        </div>
    </div>
    </div>
        </div>
    </div>
    </div>
</body>
</html>

