<?php 

$conn = mysqli_connect("localhost","root","","tunanetra");

    if(!$conn){
        die("Connection failed".mysqli_connect_error());
    }else{
        ?><script type="text/javascript">console.log("Connection Success"); </script><?php
    }

    // function query($query){
    //     global $conn;
    //     $result = mysqli_query($conn, $query);
    //     $rows = [];
    //     while( $row = mysqli_fetch_assoc($result)){
    //         $row[] = $row;
    //     }
    //     return $rows;
    // }

?>