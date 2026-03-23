<?php
$conn = mysqli_connect('localhost','root','','win');


if (!$conn)
    {
       echo 'فشل الاتصال' . mysqli_connect_error();
    }