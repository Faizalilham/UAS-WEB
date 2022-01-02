<?php

    session_start();
    include('connection.php');
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $password = $_POST['password'];
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "images/".$nama_file;

            if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
                if($ukuran_file <= 1000000){
                    if(move_uploaded_file($tmp_file, $path)){
                        $statement = mysqli_query($connection,"UPDATE tb_admin SET password='$password',nama_gambar='$nama_file',ukuran='$ukuran_file',tipe='$tipe_file' ");
                        if($statement){
                            $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data </div>' ;
                            header("location:profil_admin.php"); 
                        }else{
                            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
                            header("location:profil_admin.php"); 

                        }
                    }
                }
            }

        $statement2 = mysqli_query($connection,"UPDATE tb_admin SET password='$password' ");
        
        if($statement2){
           $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data </div>' ;
            header("location:profil_admin.php");
        }else{
            $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
            header("location:profil_admin.php");
        }


    }

?>