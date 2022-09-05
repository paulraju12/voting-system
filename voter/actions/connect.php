<?php

$con=mysqli_connect("localhost","root","","voting system");
if($con){
echo"connection successfull";
}else{
    die(mysqli_erroe($con));
}



?>