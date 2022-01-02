<?php

    session_start();
    include('connection.php');

    if(isset($_POST['submit_coment'])){
        $id_user = $_POST['id_user'];
        $id_produk = $_POST['id_produk'];
        $komentar = $_POST['komentar'];
        $created_at = date('Y-m-d H:i:s');
        $del_flage = 0;
        $statement = mysqli_query($connection,"INSERT INTO tb_coment (id_user,id_produk,komentar,created_at,del_flage) 
        VALUES('$id_user','$id_produk','$komentar','$created_at','$del_flage')");

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil Menambahkan komentar</div>' ;
            header("location:Detail.php?id=".$id_user);
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal menambahkan komentar Memesan</div>' ;
            header("location:Detail.php?id=".$id_user);
        }


    }


?>