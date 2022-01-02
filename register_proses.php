<?php

    include('connection.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $email = $_POST['email'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];
        $created_at = date('Y-m-d H:i:s');
        $del_flage = 0;

        $statement = mysqli_query($connection,"INSERT INTO tb_register (username,nama,jk,email,tgl_lahir,no_hp,alamat,password,created_at,del_flage)
            VALUES ('$username','$nama','$jk','$email','$tgl_lahir','$no_hp','$alamat','$password','$created_at','$del_flage')");

        if($statement){
            header("location:index.php");
        }else{
            header("location:register.php");
        }

    }
    

?>