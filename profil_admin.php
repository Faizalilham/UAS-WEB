<?php

    include('connection.php');
    session_start();
    if(!$_SESSION['login']){
        header("location:index.php");
    }

    $statement = mysqli_query($connection,"SELECT * FROM tb_admin");
    while($row = mysqli_fetch_array($statement)){
       $id = $row['id']; 
       $username = $row['username'];
       $jabatan = $row['jabatan'];
       $_SESSION['password_admin'] = $row['password'];
       $nama_gambar = $row['nama_gambar'];
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins"
        rel="stylesheet"
        />
    <link href="./login.css" rel="stylesheet" />
</head>
<body>

    <section>
        <div class="container-fluid">
          <div class="row ">
              <div class="col-12 col-sm-12 col-md-3" style="background-color: white;">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                        <span class="navbar-toggler-icon" data-bs-target="#offcanvasExample"></span>
                    </button>
                    <a class="navbar-brand fw-bold m-auto mt-3" href="./profil_admin.php">Administrator</a>
                </nav>
                <div class="offcanvas offcanvas-start sidebar-nav" style="border: none;" tabindex="-1"
                    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-body p-0">
                        <nav class="navbar-light">
                            <ul class="navbar-nav mt-4">
                                <li class="navbar-active">
                                    <div class="my-4">
                                        <a href="./profil_admin.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-person ms-5 me-3"></i></i>Profile</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./unggahproduk.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-upload ms-5 me-3"></i>Upload Product</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./notifikasi_admin.php" class="menu-active text-decoration-none text-black">
                                            <h5><i class="bi bi-bell ms-5 me-3"></i>Notifications</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./transaksi.php" class="menu-active text-decoration-none text-black">
                                            <h5><i class="bi bi-credit-card ms-5 me-3"></i>Transaction</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./logout.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-box-arrow-left ms-5 me-3"></i>Logout</h5>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>


        <div class="col-12 col-md-9 col-sm-12 mt-3">
            <div class="card p-4">
               <div class="card-title ">
                    <h5><b>My Profile</b></h5>
                    <div class="row">
                        <div class="col-md-8">
                             <h6 class="text-muted">Manage your profile information to control, protect and secure your account</h6>
                        </div>
                        <div class="col-md-4">
                            <div class="row justify-content-end">
                                <div class="col-md-8 text-end">
                                    <?php
                                    if(!empty($_SESSION['message'])){
                                        echo $_SESSION['message'];
                                        $_SESSION['message'] = null;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>

                    <hr class="mt-3">
               </div>
               <form action="profile_admin_ubah.php"  enctype="multipart/form-data" method="POST">
                   <div class="card-body">
                       <div class="row">
                           <div class="col-12 col-sm-8 col-md-8">
                               <div class="row">
                                    <div class="col-4 col-md-3 col-sm-3 ">
                                        <label class="text-muted mb-2">Username</label>
                                    </div>
                                    <div class="col-md-5 col-sm-5 col-5">
                                        <h5><?php echo $username; ?></h5>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-3 col-md-3">
                                        <label class="text-muted mb-2">position</label>
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-9">
                                        <input type="text" class="form-control" id ="nama" name ="nama" value= "<?php  echo $jabatan; ?>" disabled>
                                    </div>
                                </div>
                               
                                <div class="row mt-3">
                                    <div class="col-12 col-sm-3 col-md-3">
                                        <label class="text-muted mb-2">Password</label>
                                    </div>
                                    <div class="col-12 col-sm-9 col-md-9 ">
                                        <input type="text" class="form-control" id ="password" name ="password"  value= "<?php  echo $_SESSION['password_admin']; ?>" required>
                                        <input type="hidden" id="id" name="id" value="<?php echo $id; ?>">
                                    </div>
                                </div>
                                <div class="row mt-5 text-center">
                                    <div class="col-12 col-sm-12 col-md-12 ">
                                        <input type="submit" class="btn btn-dark"  name ="submit" value="save" onclick="return confirm('Are you sure ?')">
                                    </div>
                                </div>
                           </div>
                           <div class="col-md-4 text-center mt-1">
                               <?php
                                    $_SESSION['image'] = '<img src="user_images/'.$nama_gambar.'" class="img-fluid rounded-circle" width="200px" height="100px" alt="Profile">'; echo $_SESSION['image']; ?>
                                 <label class="btn btn-default btn-file">
                                    Select Image <input type="file" style="display: none;" name="gambar" >
                                </label>
                                 <p class="text-muted mt-1">
                                     File size : Max. 1MB <br>
                                     File format : .JPG, .PNG
                                 </p>
                           </div>
                       </div>
                       
                   </div>
               </form>

               
               
            </div>
          
        </div>
     </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
        crossorigin="anonymous"></script>
</body>
</html>