<?php
    $connection = new mysqli("localhost", "root", "", "ddsbe");

    if(isset($_POST['submit'])){

        $username = $connection->real_escape_string($_POST['user']);
        $password = $connection->real_escape_string($_POST['pass']);

        $data = $connection->query("SELECT username from tblusers WHERE username='$username' AND password='$password'");

        if($data->num_rows > 0 ){
            echo "SUCCESSFULLY LOGIN!";
        }
        else{
            echo "INVALID USERNAME/PASSWORD!";
        }
    }