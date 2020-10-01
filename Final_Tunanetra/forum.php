<?php

   include 'connect.php';
   session_start();
?>

<html>
    <head>
        <title> LowVision - Forum </title>
        <link rel="stylesheet" href="ztyle.css">
    </head>

    
    <style>
    
    body{
        margin-top: 0px;
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
                            <a href="login.php"> Log Out </a>
                        </div>
                    </span>
                 </li>
               
            </ul>
        </div>

        <div class="kontainer">

            <div class="rows">
                <a href="#"> Home </a>
                    <img src="img/icon/arrowRight.png">
                <a href="#"> Kategori </a>
                    <img src="img/icon/arrowRight.png">
                <a href="#"> Diskusi </a>
            </div>

        <!--  Category name -->

            <div class="rows kategori">
                <h1> Catergoty Name </h1>
                <a href="#" style="margin-left:400px;" onclick="showThread()"> + </a>
                <a href="#" style="margin-left: 30px;" onclick="showDiskusi();"> Start Discussion</a>
            </div>

        <!-- End Category Name  -->

        <!-- Name Thread -->
            <div id="tampilkan" class="baris" style="display: none;"> 

                <table class="formTable">

                    <tr>
                        <th> Nama Thread </th>
                        <th> Pembuat  </th>
                        <th> Balasan </th>
                    </tr>

                    <tr>
                        <td> <a href="#" onclick="showKreativa()">Forum Tunanetra Menggugat Ultimatum Ma'ruf Amin </a> </td>
                        <td> <a href="#"> Aldianto </a> </td>
                        <td> <a href="#"> 60 </a> </td> 
                    </tr>
                    
                    <tr>
                        <td> <a href="#" onclick="showKreativa()"> Forum Tunanetra Menggugat: Kesempatan Harus Lebih Terbuka untuk Disabilitas, Terutama pada Perempuan</a> </td>
                        <td> <a href="#"> <?php echo $_SESSION["username"]; ?>  </a> </td>
                        <td> <a href="#"> 325 </a> </td> 
                    </tr>
                    
                    <tr>
                        <td> <a href="#" onclick="showKreativa()"> Forum Tunanetra </a> </td>
                        <td> <a href="#"> mikael </a> </td>
                        <td> <a href="#"> 226 </a> </td> 
                    </tr>

                </table>

            </div>
        
        <!--  End name Thread  -->

        <!-- Plus Thread  -->

            <div id="thread1" class="threadsatu" style="display: none;">

            <table>
                    <tr>
                        <td> Masukan Judul diskusi : </td>
                        <td> <input type="text"> </td>
                    </tr>

                    <tr>
                        <td> Masukan Username :  </td>
                        <td> <input type="text"> </td>
                    </tr>

                    <tr>
                        <td> </td>
                    </tr>
            </table>

              <a href="#" style="margin-left:160px;" > Submit </a>
            </div>

        <!--  End Plus Thread -->

        <!--  Artikel Thread  -->
    
        <div id="kreativa" style="display: none;">

            <h1 align="center"> Judul  Thread </h1>
            
            <div class="tengah1">

                <span class="kotak1">

                    <div>
                        <a href="#">
                            <img src="img/icon/orang.png" >
                        </a>
                    </div>

                    <span>
                        <h1> Aldianto </h1>
                        
                        <h2> Bandung - Penyataan Cawapres KH Ma'ruf Amin mengenai orang 'buta' dan 'budek' tidak bisa melihat prestasi pemerintahan Jokowi menjadi kontroversi. Penyandang difabel di Jabar tersinggung dan menuntut Ma'ruf meminta maaf.
                        
                    </h2>
                    </span>

                </span>

                <span class="kotak2">

                    <div>
                        <a href="#">
                            <img src="img/icon/orang.png" >
                        </a>
                    </div>

                    <span>
                        <h1> <?php echo $_SESSION["username"]; ?> </h1>
                       
                        <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus tempora ex, dolorem nobis veritatis distinctio neque quos corporis officia repudiandae ipsa, delectus rem debitis quod, vitae quia porro eum atque.</h2>
                    </span>

                    <!-- <div class="balas">
                         <a href="#"> Reply </a>
                    </div> -->

                </span>
            </div>

            <!--  Balas -->

        <div id="thread3" class="threadtiga">

            <table>
                    <tr>
                        <td> Masukan Pesan anda : </td>
                    <tr>
                       
                        <td> <input type="text"> </td>
                    </tr>
    
                    <tr>
                        <td> </td>
                    </tr>
            </table>
    
              <a href="#" style="margin-left:160px;" > Submit </a>
              
        </div>

        </div>

        

        <!--  End Artikel  -->

        
 

    </div>

        <!-- Footer -->

        <div class="footer1">

            <h1> detik forum</h1>
            <h3> Copyright 2020 | All Right Reserver </h3>
        </div>  
    </div>

    <script>

        function showDiskusi(){
          if( document.getElementById("tampilkan").style.display === "none"){
              document.getElementById("tampilkan").style.display="block";
          }else{
              document.getElementById("tampilkan").style.display="none"
          }
        }


        function showThread(){
            if( document.getElementById("thread1").style.display === "none"){
              document.getElementById("thread1").style.display="block";
           
          }else{
            document.getElementById("thread1").style.display="none"
          }
        }

        function showKreativa(){
            if( document.getElementById("kreativa").style.display === "none"){
              document.getElementById("kreativa").style.display="block";
           
          }else{
            document.getElementById("kreativa").style.display="none"
          }
        }

    </script>

    </body>
</html>


<!-- Reference 
https://id.pinterest.com/pin/352899320795180391/
https://www.cleanpng.com/png-computer-icons-user-login-gender-839462/download-png.html
https://stackoverflow.com/questions/47638046/how-to-make-a-button-show-a-table-onclick/47638317
https://news.detik.com/berita/d-4298218/forum-tunanetra-menggugat-ultimatum-maruf-amin
-->