<?php

    session_start();
    include('connection.php');
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $jk = $_POST['jk'];
        $email = $_POST['email'];
        $tgl_lahir = $_POST['tgl_lahir'];
        $no_hp = $_POST['no_telepon'];
        $alamat = $_POST['alamat'];
        $pasword = $_POST['password'];
        $updated_at = date('Y-m-d H:i:s');
        $nama_file = $_FILES['gambar']['name'];
        $ukuran_file = $_FILES['gambar']['size'];
        $tipe_file = $_FILES['gambar']['type'];
        $tmp_file = $_FILES['gambar']['tmp_name'];
        $path = "user_images/".$nama_file;
        if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){
            if($ukuran_file <= 1000000){
                if(move_uploaded_file($tmp_file, $path)){

                        $statement = mysqli_query($connection,"UPDATE tb_register SET nama='$nama', jk='$jk',
                        email='$email',tgl_lahir='$tgl_lahir',no_hp='$no_hp',alamat='$alamat',password='$pasword', updated_at='$updated_at',
                        nama_gambar='$nama_file',ukuran='$ukuran_file',tipe='$tipe_file' WHERE id='$id' ");

                        if($statement){
                            $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data Diri </div>' ;
                            header("location:profil_user.php");
                        }else{
                             $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
                        }
                }
            }
        }

        $statement2 = mysqli_query($connection,"UPDATE tb_register SET nama='$nama', jk='$jk',
                        email='$email',tgl_lahir='$tgl_lahir',no_hp='$no_hp',alamat='$alamat',password='$pasword' WHERE id='$id' ");

        if($statement2){
            $_SESSION['message'] = '<div class ="alert alert-success" role="alert"> Berhasil Mengubah Data Diri </div>' ;
            header("location:profil_user.php");
        }else{
             $_SESSION['message'] = '<div class ="alert alert-danger" role="alert"> Gagal Mengubah Data </div>' ;
        }

    }

?>