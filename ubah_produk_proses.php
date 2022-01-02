<?php

    session_start();
    include('connection.php');

    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama_produk'];
        $harga = $_POST['harga'];
        $ukuran = $_POST['ukuran'];
        $kategori = $_POST['kategori'];
        $deskripsi = $_POST['deskripsi'];
        $updated_at = date('Y-m-d H:i:s');
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "product_images/".$nama_file;


         if($nama_file != null){
            if($tipe_file == "image/jpg" || $tipe_file == "image/png" || $tipe_file == "image/webp"){
                if($ukuran_file <= 1000000){
                    if(move_uploaded_file($tmp_file, $path)){
                            $statement = mysqli_query($connection,"UPDATE tb_produk SET nama='$nama',nama_gambar='$nama_file',
                            ukuran_gambar='$ukuran_file',tipe='$tipe_file',harga='$harga',ukuran_produk='$ukuran',deskripsi='$deskripsi',updated_at='$updated_at',
                            categori='$kategori' WHERE id='$id' ");

                            if($statement){
                                $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data Diri </div>' ;
                                header("location:notifikasi_admin.php");
                            }else{
                                $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
                            }
                    }
                }
            }
         }else{
            $statement2 = mysqli_query($connection,"UPDATE tb_produk SET nama='$nama',harga='$harga',ukuran_produk='$ukuran',
            deskripsi='$deskripsi',updated_at='$updated_at',categori='$kategori'  WHERE id='$id' ");
                
                if($statement2){
                    $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data </div>' ;
                    header("location:notifikasi_admin.php");
                }else{
                    $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
                    header("location:ubah_produk.php?id=$id");
                }

         }
         

      

    }

?>