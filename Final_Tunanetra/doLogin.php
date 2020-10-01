<?php
session_start();

include 'connect.php';

// Cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])) {

    // Mengambil isian dari form Login.php
    $username = $_POST['txtUsername'];
    $password = $_POST['txtPassword'];

    echo $username;

    $result = mysqli_query($conn , "select username,pasword from registrasi where username ='".$username."' and pasword ='".$password."' ");

    // Cek username 
    if( mysqli_num_rows($result) === 1){

        $_SESSION['username'] = $username;

            echo "<script> alert('Login Berhasil'); window.location.href='home.php' </script>";

        exit;

    }else{

        echo "<script> alert('Username / Password salah'); window.location.href='index.php' </script>";

    }

}

?>