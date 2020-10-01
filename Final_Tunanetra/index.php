<html>
    <head>  

        <title> LowVision -  Login </title>  

        <link rel="stylesheet" href="style.css">
    </head>
    <body>
    
        <div class="container">
            <div class="panel">
                <div class="row">

                    <div class="col judul">

                        <div class="samping">
                            <img src="./img/icon/eyes.png">
                            <h4> LowVision Co.</h4>   
                        </div>

                        <!-- Gambar  -->

                        <div class="slide-container">  
                            <img src="./img/satu.svg">
                        </div>

                    </div>

                    <div class="col login">
                       
                        <button type="button" class="btn btn-register"><a href="register.php">Sign Up</a></button>

                        <form action="doLogin.php" method="post" >

                            <div class="titles">
                                <h6> Share your story </h6>
                                <h3> Ready to login </h3>
                            </div>

                          <!--  username -->
                     <div class="form-group" id="fn-un">

                        <li>
                            <input type="text" placeholder="Username" class="form-input" id="un" name="txtUsername">
                        </li>

                            <!-- Input icon Username -->
                            <div class="input-icon ">
                                <img src="./img/icon/username.png" alt="">
                            </div>

                    </div>

                        <div>
                              <p id="un-p" class="center-p"></p>
                        </div>

                    <!--  Password  -->
                     <div class="form-group" id="fn-pw">

                            <li>
                                <input type="password" placeholder="Password" class="form-input" id="pw" name="txtPassword">
                            </li>


                            <!-- Input icon password -->
                            <div class="input-icon ">
                                <img src="./img/icon/password.png" alt="">
                            </div>

                    </div>

                        <div>
                              <p id="pw-p" class="center-p"></p>
                        </div>

                    <li>
                        <button class="btn btn-submit" id="mylink" name="submit" > 
                            <a onclick="loginForm()" href="#"> Submit </a> 
                        </button>
                     </li>

                        </form>
                    </div>

                </div>
            </div>
        </div>

    </body>

    <script>

function loginForm(){

// // //Un
var un = document.getElementById('un').value;
        if(un==""){
            document.getElementById("un-p").innerHTML="Must be filled";
            document.getElementById("fn-un").style.borderColor = "red";
        }else if(un.length<6){
            document.getElementById("un-p").innerHTML="Must be more that 6";
            document.getElementById("fn-un").style.borderColor = "red";
        }else if(un.includes(' ')){
            document.getElementById("un-p").innerHTML="Cannot contain 'space'";  
            document.getElementById("fn-un").style.borderColor = "red";
        }else{
            document.getElementById("un-p").innerHTML="";
            document.getElementById("fn-un").style.borderColor = "black";
            var unCHK = true;
        }

// //pw
var pw = document.getElementById('pw').value;

    if(pw == ""){
            document.getElementById("pw-p").innerHTML="Must be filled";
            document.getElementById("fn-pw").style.borderColor = "red";
        }else if(pw.length<8){
            document.getElementById("pw-p").innerHTML="Password must be more than 8";
            document.getElementById("fn-pw").style.borderColor = "red";
        }else{
            document.getElementById("pw-p").innerHTML="";
            document.getElementById("fn-pw").style.borderColor = "black";
            var pwCHK = true;
        }
    
        if( pwCHK==true && unCHK==true ){
         //   alert('Hello '+ un +',' + 'Login Success');
            pwCHK==false;unCHK==false; 
        }
    }

    </script>

</html>

<!-- 
Reference : 
https://icons8.com/icons/set/login
https://fontawesome.com/start/confirm
https://www.pngwave.com/png-clip-art-xysek/download
 -->