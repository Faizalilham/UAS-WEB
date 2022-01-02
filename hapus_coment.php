<?php

    include('connection.php');
    session_start();
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $updated_at = date('Y-m-d H:i:s');
        $del_flage = 1;
        
        $statement = mysqli_query($connection,"UPDATE tb_coment SET updated_at='$updated_at', del_flage='$del_flage' WHERE id_coment='$id' ");

        if($statement){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert">Berhasil menghapus Pesanan</div>' ;
            header("location:Detail_produk.php?id=".$_GET['barang']);
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert">Gagal menghapus Pesanan</div>' ;
            header("location:Detail.php?id=".$_GET['barang']);
        }



    }   



   
?>
