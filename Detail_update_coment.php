<?php

    include('connection.php');
    session_start();
    if(isset($_POST['submit'])){
        $id_coment = $_POST['id_coment'];
        $id_produk = $_POST['id_produk'];
        $komentar = $_POST['komentar'];
        $updated_at = date('Y-m-d H:i:s');

        $statement = mysqli_query($connection,"UPDATE tb_coment SET komentar='$komentar',updated_at='$updated_at' WHERE id_coment= '$id_coment' ");

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil mengupdate pesanan  </div>'  ;
            header("location:Detail.php?id=".$id_produk);
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal mengupdate Pesanan</div>' ;
            header("location:Detail.php?id=".$id_produk);
        }
    }


?>