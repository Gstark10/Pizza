<?php 

    // connect to database
    $conn = mysqli_connect('localhost', 'milli', 'milli999', 'crespy_pizza');

    // check connection
    if(!$conn){
        echo 'connection error: ' . mysqli_connect_error();
    }

?>