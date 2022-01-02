<?php

    include('connection.php');

    session_start();
    if(isset($_POST['submit'])){
        $nama_produk = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $ukuran_produk = $_POST['ukuran'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $created_at = date('Y-m-d H:i:s');
        $del_flage = 0;
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "product_images/".$nama_file;
        

        if($nama_file != null){
            if($tipe_file == "image/jpeg" || $tipe_file == "image/png" || $tipe_file == "image/webp"){
                if($ukuran_file <= 1000000){
                    if(move_uploaded_file($tmp_file, $path)){

                            $statement = mysqli_query($connection,"INSERT INTO tb_produk (nama,nama_gambar,ukuran_gambar,tipe,harga,ukuran_produk,deskripsi,created_at,del_flage,categori)
                                VALUES ('$nama_produk','$nama_file','$ukuran_file','$tipe_file','$harga','$ukuran_produk','$deskripsi','$created_at','$del_flage','$kategori')");

                            if($statement){
                                $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Menambahkan Data Diri </div>' ;
                                header("location:unggahproduk.php");
                            }else{
                                $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Menambahkan Data </div>' ;
                            }
                    }
                }
            }
        }else{
            $statement2 = mysqli_query($connection,"INSERT INTO tb_produk (nama,harga,ukuran_produk,deskripsi,created_at,del_flage,categori)
                        VALUES ('$nama_produk','$harga','$ukuran_produk','$deskripsi','$created_at','$del_flage','$kategori')");

            if($statement2){
                $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Menambahkan Data </div>' ;
                header("location:unggahproduk.php");
            }else{
                $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal menambahkan data 2</div>' ;
                header("location:unggahproduk.php");
            }

        }
     

    }
    

?>