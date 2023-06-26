<?php

require('dbConnection.php');

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sql = "delete from `admindata` where id = '$id'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo('Deleted');
    }

    else{
        die(mysqli_error($conn));
    }
}

?>