<?php

    include 'connection.php';

    $query = "SELECT * FROM usuario";
    $data = mysqli_query($conn, $query);

    print_r(mysqli_fetch_assoc($data));

    

    foreach ($data as $user) {
        echo $user['nome'];
    }