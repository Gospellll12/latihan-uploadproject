<?php

$koneksi = mysqli_connect("localhost","root","mysql","loginpg");

if (mysqli_connect_error()){
    echo "Koneksi database gagal : " . mysqli_connect_error();
}