<?php
$conn = mysqli_connect('localhost','root','','student form');
if($conn)
{
    echo "connected";
}
else{
    echo "NOt connected";
}
?> 