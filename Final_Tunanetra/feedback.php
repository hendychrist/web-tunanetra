
<?php
    include 'connect.php';
    session_start();
?>


<html> 

        <head>
            <title> LowVision - Feedback</title>
            <link rel="stylesheet" href="ztyle.css">

            <style>
    
    body{
        margin-top: 70px
    }

    /* Dropdown */

.dropbtn a img{
    margin-left: 100px;
    width: 50px;
    height: auto;
}

.dropdown-content{
      margin-left: 1300px;
      display: none;
      position: absolute;
      right: 80;
     
      background-color: rgba(6, 112, 233);
      min-width: 160px;
      border-radius: 15px;
      opacity: 60%;
      height: 2px;
      transition: height 1s;
    }

.dropdown-content a{
  float: none;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
  color: rgb(255, 255, 255);
}

  .dropdown-content:hover{
    height: 200px;
     opacity: 80%;
  }

.dropdown:hover .dropdown-content {
  display: block;
}

       </style>

    </head>
 
    <body>

    <div class="background">

        <div class="navbarr" style=" 
            float:left;
            height: 70px;
        
            display: flex;
            background-color: rgb(47, 75, 107);
            border: 0px solid rgb(6, 112, 233);
            opacity: 80%;
        ">
            <img src=./img/FLogo.png style="
                padding: 5px 5px 5px 5px;
                width: 15%;
                
            ">

    <span style="
        position: relative;
        left:40px;
        width:200px;
        height:35px;

        padding: .5rem 1.5rem;
        border: none;
        border-radius: 10px;
        background:  linear-gradient(to right, #ab93ff, #1ba4ff);
        box-shadow: 3px 4px 7px rgba(27,27,27,0.534);

        text-align:center; 
        margin-top: 10px;
    "> 
        <h4 
        style="
         position:relative;
         top:-35px;

        text-decoration: none;
        color: white;
        font-size: 20px;

        font-family:  Arial, Helvetica, sans-serif;
        ">Welcome,  
            <?php echo $_SESSION["username"]; ?> 
    
           </h4>
    </span>

            <ul  style="
                font-size: 20px;
                display: flex;
                margin: 8px 25px 25px 50px;
                font-family: sans-serif;
                text-transform: uppercase;
                color: white;
            ">

                <li style="margin-left: 550px; margin-top: 10px;"> 
                    <a href="home.php" style="color: white;text-decoration: none;"> Home </a>
                </li>

                <li style="margin-left: 50px; margin-top: 10px;"> 
                    <a href="" style="color: white;text-decoration: none;">Visi </a> 
                </li>

                <li style="margin-left: 50px; margin-top: 10px;"> 
                     <a href="" style="color: white;text-decoration: none;"> Misi </a> 
                </li>
           
                <li style="margin-left: 50px; margin-top: 10px;"> 
                    <a href="" style="color: white;text-decoration: none;">Event </a> 
                </li>

                <li style="margin-left: 50px; margin-top: 10px;"> 
                    <a href="" style="color: white;text-decoration: none;"> Artikel  </a>
                </li>
               
                <li style="margin-left: 50px;"> 
                    <span class="dropdown"> 
                        <span class="dropbtn">
                            <a href="#"> <img src="img/icon/drop.png" style="
                                margin-top: 10px;
                                margin-left: 30px;
                                width: 50px;
                                height: auto;
                            "> </a>  
                        </span>
        
                        <div class="dropdown-content" style="
                        "> 
                            <a href="feedback.php"> Feedback </a>
                            <a href="rating.php"> Rating </a>
                            <a href="forum.php"> Forum </a>
                            <a href="index.php"> Log Out </a>
                        </div>
                    </span>
                 </li>
               
            </ul>
        </div>
<!--  Feedback  -->

<form action="">
    <div class="belakang">
        <div class="fdback">
            <h1> Feedback </h1>
            <hr>    
            <span class="negah">
                <div class="suka">
                    <label> Bagaimana pendapat anda tentang peralatan yang tersedia ?  </label>
                    <br>
                    <spans>
                        <input type="radio" name="rating" id="jelek"value="jelek"><small> Jelek </small>
                        <input type="radio" name="rating" id="biasa" value="biasa"><small> Biasa saja</small>
                        <input type="radio" name="rating"id="bagus" value="bagus"><small> Bagus </small>
                    </span>
                </div>

                <!-- Berpengaruh dengan justify content -->
                <div class="luar">

                    <div class="dalem1">
                        <label> Full Name*</label>
                        <div class="bulat"> 
                            <input type="text" placeholder="Hendy Christian" class="namap">
                        </div>
                    </div>

                    <div class="dalem2">
                        <label> Email*</label>
                        <div class="bulat"> 
                            <input type="text" placeholder="Adwd@fwffw.com" class="namap">
                        </div>
                    </div>

                </div>

                <div class="luar">

                    <div class="dalem3">
                        <label> Age*</label>
                        <div class="bulat"> 
                            <input type="text" placeholder="25" class="namap">
                        </div>
                    </div>

                    <div class="dalem2">
                        <label> Phone*</label>
                        <div class="bulat"> 
                            <input type="text" placeholder="082239442344" class="namap">
                        </div>
                    </div>

                </div>

                <div class="ngiri">

                    <div> 
                        <label> Message* </label>
                    </div>

                    <div class="bulet">
                        <input type="text" placeholder=" Write your message here" class="bigMap">
                    </div>

                    <button type="submit" class="btn tombol"> <a href="#"> Submit </a> 
                    </button>
                   
                </div>
                
                <div class="antara">

                </div>
                   
               

            </span>

        </form>
        </div>
    </div>

   <!--  Footer  -->
                            
   <div class="footer">
            
    <h1>Hendy Christian</h1>
    <h3> Copyright 2020 | All Right Reserver </h3>
</div>     

    </body>
</html>