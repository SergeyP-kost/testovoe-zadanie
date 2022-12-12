<?php

$link = mysqli_connect("localhost", "sanatolp", "0330", "rating");

if(mysqli_connect_errno())
{
    echo "Не удалось подключиться к MySQL:(" . $mysqli_connect_errno() . ") " . mysqli_connect_error();
    exit();
}
