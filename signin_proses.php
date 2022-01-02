<?php
include('connection.php');
session_start();
if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // menyeleksi data admin dengan username dan password yang sesuai
      $statement = mysqli_query($connection,"SELECT * FROM tb_admin WHERE username='$username' and password='$password' ");
      $statement2 = mysqli_query($connection,"SELECT * FROM tb_register WHERE username='$username' and password='$password' ");
    
    $cek = mysqli_num_rows($statement);
    $cek2 = mysqli_num_rows($statement2);

    if($cek > 0){
        while($row_admin = mysqli_fetch_array($statement)){
            $_SESSION['id_admin'] = $row_admin['id'];
            $_SESSION['username'] = $username;
            $_SESSION['password_admin'] = $row_admin['password'];
            $_SESSION['login'] = true;
            header("location:profil_admin.php");
        }
    }elseif($cek2 > 0){
        while($row = mysqli_fetch_array($statement2)){
            session_start();
            $_SESSION['id'] = $row['id'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['jk'] = $row['jk'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['tgl_lahir'] = $row['tgl_lahir'];
            $_SESSION['no_hp'] = $row['no_hp'];
            $_SESSION['alamat'] = $row['alamat'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['login_user'] = true;
            header("location:home.php");
        }
         
    }else{
        header("location:index.php?pesan=gagal=$cek");
    }

} else{
    die("Akses dilarang...");
 
}

?>