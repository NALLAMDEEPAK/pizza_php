+<?php 

// connect to the database
$conn = mysqli_connect('localhost', 'deepu', 'deepu2004@', 'deepak');


// check connection
if(!$conn){
    echo 'Connection error: '. mysqli_connect_error();
}

?>