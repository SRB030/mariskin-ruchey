<?php

include 'connect_db.php';

function forpost(){
    global $connect;

    $sql = 'SELECT * FROM `post`';
    $result = mysqli_query($connect,$sql);

    $post = array();
    while ($row = $result->fetch_assoc()){
      $post[] = $row;
    }

    return $post;
}

?>
