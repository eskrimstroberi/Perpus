<?php
$conn=mysqli_connect('localhost','root','','perpus_php_native');
/* check connection */
if (mysqli_connect_errno()) {
    printf("GAGAL", mysqli_connect_error());
    exit();
}
?>