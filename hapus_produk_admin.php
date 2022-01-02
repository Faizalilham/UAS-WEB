<?php

    include('connection.php');
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $deleted_at = date('Y-m-d H:i:s');
        $del_flage = 1;
        
        
        $statement = mysqli_query($connection,"UPDATE tb_transaksi SET deleted_at='$deleted_at', del_flage = '$del_flage' WHERE id = '$id'");


        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil Membatalkan Pesanan</div>' ;
            header("location:transaksi.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal Membatalkan Pesanan</div>' ;
            header("location:transaksi.php");
        }



    }   



   
?>