<?php

    include('connection.php');
    session_start();
    if(isset($_SESSION['login'])){
        header("location:profil_admin.php");
    }elseif(isset($_SESSION['login_user'])){
        header("location:home.php");
    }

    $pesan = NULL;
    if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
            $pesan = '<div class ="alert alert-danger" role="alert"> Login Gagal! Username atau password salah !! </div>' ;
        }
    }
?>



<!DOCTYPE html>
<html lang="en">
<head>

    
    <title>Login</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />

</head>
<body style="background-color: rgb(249, 249, 249); font-family: Poppins;font-size: 16px;">
    <section>
        <div class="container-fluid ">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-6 col-d-none col-md-block col-sm-block ">
                    <img src="./login.png" class="vh-100" alt="" width="100%" height="100%">
                </div> 
                <div class="col-md-6 col-sm-6 col-12">
                       <div class="row ms-3 me-3">
                           <h2><b>Pendo</b>store</h2>
                           <p class="mt-3">No.1 online shop in Indonesia </p>
                            <form class="form-signin" action="signin_proses.php" method="POST">
                                <?php  echo $pesan; ?>
                                 <div class="row mt-3">
                                    <div class="col-md-6 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="text" id="username" class="form-control" name="username" placeholder="Username"  required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>                                  
                                <div class="row">
                                    <div class="col-md-6 col-sm-12 col-12 d-grid gap-2">
                                        <input type="submit" class="btn btn-dark" name="login" value="Login"/>
                                    </div>
                                </div>
                             </form>

                             <p class="mt-5">
                                 Belum punya akun ? <a href="register.php" class="text-decoration-none">Register</a></p>
                             <p>
                                Copyright © 2021 | Faizal Falakh - 1107
                             </p>
                       </div>
                       
                </div>
            </div>
        </div>
    </section>
    

    <?php  include('js.php');?> 
</body>
</html>