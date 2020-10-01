<html>
    <head>  

        <title> LowVision - Register </title>  

        <link rel="stylesheet" href="style.css">

    <style>
        #date{
            margin-top:14px;
            margin-left:30px;
            padding: 0px 0px 0px 0px;
        }
    </style>

    </head>
    <body>
    
        <div class="container">
            <div class="panel">
                <div class="row2">

                    <div class="col judul2">

                        <div class="samping2">
                            <img src="./img/icon/eyes.png">
                            <h4> LowVision Co.</h4>   
                        </div>

                        <!-- Gambar  -->

                        <div class="slide-container2">  
                            <img src="./img/tiga.svg">
                        </div>

                    </div>

                    <div class="col login">
                       
                        <button class="btn btn-register"><a href="index.php">Log in</a></button>

     <form action="doRegister.php" method="post" >

        <div class="titles2">
            <h6> First </h6>
            <h3 style="margin-right: 50px;"> Create Your Account </h3>
        </div>

            <!--  fullname -->
                <ul>
                    <div class="form-group" id="fn-fg">
                        <li>
                            <input type="text" placeholder="Insert Your fullname" class="form-input" id="fn" name="txtFullname">
                        </li>

                        <!-- Input icon Username -->
                        <div class="input-icon ">
                            <img src="./img/icon/fullname.png" >
                        </div>

                    </div>

                    <div>
                        <p id="fn-p" class="center-p"></p>
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

            <!--  Gender  -->
            <div class="form-group" id="fn-gender">

                    <li>
                        <span class="jenis">

                            <h1> Gender </h1>

                            <input type="radio" class="m" value="Male" id="m" name="gender">
                            <h2> Male</h2>

                            <input type="radio" id="f" value="Female" name="gender">
                            <h2> Female </h2>
                        
                        </span>
                    </li>

                    <!-- Input icon password -->
                    <div class="input-icon ">
                        <img src="./img/icon/gender.png" >
                    </div>

            </div>

            <div>
                <p id="gender-p" class="center-p"></p>
            </div>
            
            <!--  Date of birth  -->
            <div class="form-group" id="fn-date">

                            <li>
                                    <select name="day" id="date">
                                        <option value=""> Day </option>
                                        <option value="01">1</option>
                                        <option value="02">2</option>
                                        <option value="03">3</option>
                                        <option value="04">4</option>
                                        <option value="05">5</option>
                                        <option value="06">6</option>
                                        <option value="07">7</option>
                                        <option value="08">8</option>
                                        <option value="09">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                </select>

                                    <select name="month" id="date">
                                        <option value=""> month </option>
                                        <option value="januari">Januari</option>
                                        <option value="februari">Februari</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="juli">Juli</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="oktober">Oktober</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>

                                    <select name="year" id="date">
                                        <option value=""> year </option>
                                        <option value="2030">2030</option>
                                        <option value="2029">2029</option>
                                        <option value="2028">2028</option>
                                        <option value="2027">2027</option>
                                        <option value="2026">2026</option>
                                        <option value="2025">2025</option>
                                        <option value="2024">2024</option>
                                        <option value="2023">2023</option>
                                        <option value="2022">2022</option>
                                        <option value="2021">2021</option>
                                        <option value="2020">2020</option>
                                        <option value="2019">2019</option>
                                        <option value="2018">2018</option>
                                        <option value="2017">2017</option>
                                        <option value="2016">2016</option>
                                        <option value="2015">2015</option>
                                        <option value="2014">2014</option>
                                        <option value="2013">2013</option>
                                        <option value="2012">2012</option>
                                        <option value="2011">2011</option>
                                        <option value="2010">2010</option>
                                        <option value="2009">2009</option>
                                        <option value="2008">2008</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                        <option value="1949">1949</option>
                                        <option value="1948">1948</option>
                                        <option value="1947">1947</option>
                                        <option value="1946">1946</option>
                                        <option value="1945">1945</option>
                                        <option value="1944">1944</option>
                                        <option value="1943">1943</option>
                                        <option value="1942">1942</option>
                                        <option value="1941">1941</option>
                                        <option value="1940">1940</option>
                                        <option value="1939">1939</option>
                                        <option value="1938">1938</option>
                                        <option value="1937">1937</option>
                                        <option value="1936">1936</option>
                                        <option value="1935">1935</option>
                                        <option value="1934">1934</option>
                                        <option value="1933">1933</option>
                                        <option value="1932">1932</option>
                                        <option value="1931">1931</option>
                                        <option value="1930">1930</option>
                                        <option value="1929">1929</option>
                                        <option value="1928">1928</option>
                                        <option value="1927">1927</option>
                                        <option value="1926">1926</option>
                                        <option value="1925">1925</option>
                                        <option value="1924">1924</option>
                                        <option value="1923">1923</option>
                                        <option value="1922">1922</option>
                                        <option value="1921">1921</option>
                                        <option value="1920">1920</option>
                                        <option value="1919">1919</option>
                                        <option value="1918">1918</option>
                                        <option value="1917">1917</option>
                                        <option value="1916">1916</option>
                                        <option value="1915">1915</option>
                                        <option value="1914">1914</option>
                                        <option value="1913">1913</option>
                                        <option value="1912">1912</option>
                                        <option value="1911">1911</option>
                                        <option value="1910">1910</option>
                                        <option value="1909">1909</option>
                                        <option value="1908">1908</option>
                                        <option value="1907">1907</option>
                                        <option value="1906">1906</option>
                                        <option value="1905">1905</option>
                                        <option value="1904">1904</option>
                                        <option value="1903">1903</option>
                                        <option value="1902">1902</option>
                                        <option value="1901">1901</option>
                                        <option value="1900">1900</option>
                                </select>
                    </li>

                 </div>
                  
            <div>
                <p id="date-p" class="center-p" ></p>
            </div>

                <!--  Email  -->
                <div class="form-group" id="fn-email">

                        <li>
                            <input type="text" placeholder="Email" class="form-input" id="email" name="txtEmail">
                        </li>

                    <!-- Input icon Email -->
                    <div class="input-icon ">
                        <img src="./img/icon/email.png" >
                    </div>

            </div>

            <div>
                <p id="email-p" class="center-p"></p>
            </div>

            <li>    
                <div style="display:flex;">

                    <div class="validasi" id="yoklang" style="
                        margin-top:40px;
                        padding: .5rem 1.5rem;
                        border: none;
                        border-radius: 2rem;
                        background: var(--primary-gradient);
                        box-shadow: var(--primary-shadow);
                        cursor: pointer;
                    ">
                        <a onclick="validationForm()" href="#" style="
                            color: whitesmoke;
                            font-size: 20px;
                            font-family: var(--Calibri);
                            text-decoration: none;
                        "> Submit  </a> 
                    </div>   

                    <div id="terhilang" style="

                        margin-left:20px;
                        margin-top:40px;
                        display:none;
                    
                    ">
                        <button name="submit" type="submit" style="
                            padding: .5rem 1.5rem;
                            border: none;
                            border-radius: 2rem;
                            background: var(--primary-gradient);
                            box-shadow: var(--primary-shadow);
                            cursor: pointer;
                            
                            color: whitesmoke;
                            font-size: 20px;
                            font-family: var(--Calibri);
                            text-decoration: none;

                        "> Continue </button>
                    </div>

                </div>
                 
                   
            </li>

        </ul>

</form>

                    </div>

                </div>
            </div>
        </div>

    </body>

    <script>

function fullname(){

    var isi = document.getElementById('fn').value;
    var ztatus = true;

    for ( var x = 0 ; x < isi.length; x++){

        //  Jika x tidak sama dengan kondisi di bawah maka return false and alert
        if(!(isi.charAt(x) >= 'A' && isi.charAt(x) <= 'Z' || isi.charAt(x) >= 'a' && isi.charAt(x) <= 'z' || isi.charAt(x) == ' ' ) ) {

            console.log(" Isi dari Full name masi memiliki angka atau special character");
            document.getElementById("fn-p").innerHTML="Alphabets Only";

            ztatus = false;
            break;
        }
    }

    return ztatus;
    document.getElementById("fn-p").innerHTML="";
}

function isAlphanumeric() {

var pw = document.getElementById('pw').value;

        //var regexPattern = /(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]/g; //Regex
        var status = true;
        //Check apakah hanya ada huruf atau angka
        for(var index = 0; index < pw.length; index++) {
            if(!(pw.charAt(index) >= 'A' && pw.charAt(index) <= 'Z' || pw.charAt(index) >= 'a' && pw.charAt(index) <= 'z' || pw.charAt(index) >= '0' && pw.charAt(index) <= '9')) {

                // Jika dia menemukan selain angka dan huruf maka status false langsung di break 
                console.log("Special Character Found");
                document.getElementById("pw-p").innerHTML="Must be alphanumeric";

                // JIka tidak menenukan special character status true langsung lanjut cek yang bawha lagi 
                status = false;
                break;  
            }
        }
        //Check apakah ada angka
        if(status) {
            for(var index = 0; index < pw.length; index++) {
                if(pw.charAt(index) >= '0' && pw.charAt(index) <= '9') {
                    status = true;
               
                    break;
                }
                else {
                    status = false;
                    document.getElementById("pw-p").innerHTML="Must be alphanumeric";
                    console.log("There is no Numeric");
                }
            }
        }
        //Check apakah ada huruf
        if(status) {
            for(var index = 0; index < pw.length; index++) {
                if(pw.charAt(index) >= 'A' && pw.charAt(index) <= 'Z' || pw.charAt(index) >= 'a' && pw.charAt(index) <= 'z'){
                    status = true;
                    break;
                }
                else{
                    status = false;
                    document.getElementById("pw-p").innerHTML="Must be alphanumeric";
                    console.log("There is no Alphabet");
                } 
            }
        }
    return status;
}


function validationForm(){

//Fullname
    var fn = document.getElementById('fn').value;

    if(fullname() == true){
        if(fn==""){
            document.getElementById("fn-p").innerHTML="Must be filled";
            document.getElementById("fn-fg").style.borderColor = "red";
        }else if(!fn.includes(' ')){
            document.getElementById("fn-p").innerHTML="Insert your fullname";
            document.getElementById("fn-fg").style.borderColor = "red";
        }else{
            document.getElementById("fn-p").innerHTML="";
            document.getElementById("fn-fg").style.borderColor = "black";
            var fnCHK = true; 
        }
    }

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

if( isAlphanumeric() == true ){
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
    }

// Gender
        var gender = null;
        if(document.getElementById('m').checked) {
            gender = "Male";
                document.getElementById("gender-p").innerHTML=""; 
                document.getElementById("fn-gender").style.borderColor = "black";
            var genderCHK = true; 
        }else if(document.getElementById('f').checked) {
            gender = "Female";
                document.getElementById("gender-p").innerHTML=""; 
                document.getElementById("fn-gender").style.borderColor = "black";
            var genderCHK = true; 
        }else{
            document.getElementById("gender-p").innerHTML="Must be filled"; 
            document.getElementById("fn-gender").style.borderColor = "red";
        }
      
//Date
var date = document.getElementById('date').value;
if(date == ""){
    document.getElementById("date-p").innerHTML="Date be filled";
    document.getElementById("fn-date").style.borderColor = "red";
}else{
    document.getElementById("date-p").innerHTML="";
    document.getElementById("fn-date").style.borderColor = "black";
            var dateCHK = true; 
}

//Email
var email = document.getElementById('email').value;  
        if(email==""){
            document.getElementById("email-p").innerHTML="Must be filled";
            document.getElementById("fn-email").style.borderColor = "red";
        }else if(!email.includes('.') || !email.includes('@')){
            document.getElementById("email-p").innerHTML="Must include . & @";
            document.getElementById("fn-email").style.borderColor = "red";
        }else if(email.includes('@.')){
            document.getElementById("email-p").innerHTML="Cannot contains @.";
            document.getElementById("fn-email").style.borderColor = "red";
        }else{
            document.getElementById("email-p").innerHTML="";
            document.getElementById("fn-email").style.borderColor = "black";
            var emailCHK = true; 
        }


        if(fnCHK==true && pwCHK==true && emailCHK==true && unCHK==true && genderCHK==true &&  dateCHK==true ){
            document.getElementById("terhilang").style.display = "block";
            document.getElementById("yoklang").style.display = "none";
            alert('Hello '+fn+', '+'Please confirmation your registration , that has  been sent to '+email);
            fnCHK==false;  pwCHK==false; emailCHK==false; unCHK==false; genderCHK==false; dateCHK==false;
        }
    }


    </script>

</html>
