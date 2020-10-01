<?php

   include 'connect.php';
   session_start();
?>

<html>
    <head>
        <title> LowVision - Home </title>
            <link rel="stylesheet" href="ztyle.css">

        <style>
    
    body{
        margin-top: -90px
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
      right:60;
     
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
                    <a href="#visi" style="color: white;text-decoration: none;">Visi </a> 
                </li>

                <li style="margin-left: 50px; margin-top: 10px;"> 
                     <a href="#misi" style="color: white;text-decoration: none;"> Misi </a> 
                </li>
           
                <li style="margin-left: 50px; margin-top: 10px;"> 
                    <a href="#Aktivitas" style="color: white;text-decoration: none;">Event </a> 
                </li>

                <li style="margin-left: 50px; margin-top: 10px;"> 
                    <a href="#kreativa" style="color: white;text-decoration: none;"> Artikel  </a>
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

        <div class="slide" id="home">
            <h1> Support Tunanetra Indonesia  </h1>
            <h3> 3,750,000 Penduduk Indonesia, adalah Penyandang <br >Tunanetra (estimasi Kementerian Kesehatan RI)</h3>
        </div>

    </div>

        <div class="content" id="visi">
            <div>

                <span class="text1">
                    <h1> SIAPA TUNANETRA? </h1>
                     <h3> Tunanetra adalah  mereka yang tidak memiliki penglihatan sama sekali (buta total)  <br> <br>serta mereka yang masih memiliki sisa penglihatan tetapi tidak mampu menggunakan penglihatannya untuk membaca tulisan biasa berukuran 12 point dalam keadaan cahaya normal dan dari jarak normal meskipun dibantu dengan kaca mata (kurang awas/ low vision).

                        
                      </h3>
                </span>
                
                <span class="text2">
                    <h1> Visi LowVision </h1>
                    <h3> Visi LowVision Co. adalah terwujudnya masyarakat inklusif <br> dimana orang tunanetra dapat berpartisipasi penuh <br> dalam berbagai aspek kehidupan dan penghidupan<br> bersama anggota masyarakat pada umumnya atas <br>dasar keseteraan.
                </span>


            </div>
        </div>

        <div class="content2" id="misi">

            <h1 align="center"> Misi LowVision </h1>
                 <img src="img/BannerPoint.jpg" alt="logo">
            <p align="center"> CLIK THE IMAGE</p>
        </div>
        
        <div class="content3" id="Aktivitas">
            <div> 
                <!-- Content3 div || Box Tengah-->
                <span class="gambar1">   

                        <figure> 

                            <a href="#gambar_1">
                              <img src="img/Play.jpg" alt="projek1"> 
                            </a>

                            <span class="overlay" id="gambar_1">
                                <a href="#" class="close"> Close </a>
                                    <img src="img/Overlay1.jpg" alt="indoxxi">
                            </span>

                        </figure>
                        
                        <figure>

                            <a href="#gambar_2">
                                <img src="img/overlay/dua.jpg" alt="projek2">
                            </a>

                            <span class="overlay" id="gambar_2">
                                <a href="#" class="close"> Close </a>
                                <img src="img/overlay/dua.jpg" alt="guru">
                            </span>
                            
                        </figure>
                </span>

                <span class="gambar2">

                    <figure>
                        <a href="#gambar_3">
                            <img src="img/overlay/tiga.jpg" alt="projek3">
                        </a>
                        <span class="overlay" id="gambar_3">
                            <a href="#" class="close"> Close </a>
                            <img src="img/overlay/tiga.jpg" alt="food">
                         </span>
                    </figure>

                    <figure>
                             <a href="#gambar_4">
                                <img src="img/overlay/empat.jpg" alt="projek4">
                            </a>
                            <span class="overlay" id="gambar_4">
                                <a href="#" class="close"> Close </a>
                                <img src="img/overlay/empat.jpg" alt="foto">
                            </span>
                    </figure>  

                </span> 

            </div>
        </div>
       
        <div class="education" id="kreativa">

            <h1 align="center"> Artikel </h1>
            
            <div class="tengah">

                <span class="kotak1">

                    <div>
                        <a href="#">
                            <img src="img/Artikel1.jpg" >
                        </a>
                    </div>

                    <span>
                        <h1> Sahabat Istimewa </h1>
                        
                        <h2> Setahun silam, tepatnya bulan Mei 2017, aku mengutip ka limat di atas untuk ditulis pada sebuah kartu ucapan ulang tahun sahabatku. Seorang sahabat spesial tentunya, yang saking spesial.a </h2>
                    </span>

                </span>

                <span class="kotak2">

                    <div>
                        <a href="#">
                            <img src="img/Artikel2.jpg" >
                        </a>
                    </div>

                    <span>
                        <h1> APRIL WOW : SATU CINTA SATU HATI</h1>
                       
                        <h2>Sehari lagi menuju hari yang dinanti. Hari yang akan menjadi pertemuan pertamaku dan dia setelah sekian tahun lamanya. Hari yang jatuh pada tanggal satu April dan membuatku begitu tidak</h2>
                    </span>

                </span>
            </div>
        </div>
           
                                <!-- Footer -->

        <div class="footer">
     
            <h1>Hendy Christian</h1>
            <h3> Copyright 2020 | All Right Reserver </h3>
        </div>                             

        <script>

            var slideIndex = 1;
             showSlides(slideIndex);

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                
                    if (n > slides.length) {
                        slideIndex = 1
                    }    

                    if (n < 1) {
                        slideIndex = slides.length
                    }

                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";  
                    }

                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }

                     slides[slideIndex-1].style.display = "block";  
                     dots[slideIndex-1].className += " active";
            }
        </script>
    </body>
</html>

<!--  Resource : 
    https://www.allaboutvision.com/lowvision/resources.htm
    https://pertuni.or.id/
 -->