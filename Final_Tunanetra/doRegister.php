<?php
include 'connect.php';

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    if("<sciprt> validationForm() == true </script>"){

    $fullname = $_POST["txtFullname"];
    $username = $_POST["txtUsername"];
    $pasword = $_POST["txtPassword"];
    $gender = $_POST["gender"];
    $day = $_POST["day"];
    $month = $_POST["month"];
    $year = $_POST["year"];
    $email = $_POST["txtEmail"];


    $query = "INSERT INTO registrasi VALUES ('', '".$fullname."', '".$username."', '".$pasword."', '".$gender."', '".$day."', '".$month."', '".$year."', '".$email."')";

        mysqli_query($conn, $query);

        //Cek apakah data berhasil di tambahkan atau tidak
        if( mysqli_affected_rows($conn) > 0){
            echo ' <script> alert("Data berhasil ditambah"); </script>';
            header('location:index.php');
        } else {
            echo ' <script> alert("Data gagal! Failed!"); </script>';
        }

    }else{
        header('location:register.php');
    }

}

?>