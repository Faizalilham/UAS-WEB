<?php

    session_start();
    include('connection.php');

     if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $username = $_POST['username'];
        $email = $_POST['email'];
        $no_hp = $_POST['no_hp'];
        $alamat = $_POST['alamat'];
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $created_at = date('Y-m-d H:i:s');
        $del_flage = 0;

        $statement = mysqli_query($connection,"INSERT INTO tb_transaksi (firstname,lastname,username,email,no_hp,alamat,created_at,del_flage,nama_produk,harga)
            VALUES ('$firstname','$lastname','$username','$email','$no_hp','$alamat','$created_at','$del_flage','$nama_produk','$harga')");

        if($statement){
             $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil Memesan</div>' ;
            header("location:Checkout.php?id=".$id);
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal Memesan</div>' ;
            // var_dump($statement);
            // die();
            header("location:Checkout.php?id=".$id);
        }

    }

?>