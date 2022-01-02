<?php

    session_start();
    include('connection.php');
    if(!$_SESSION['login_user']){
        header("location:index.php");
    }

    $statement = mysqli_query($connection,"SELECT * FROM tb_transaksi WHERE del_flage=0 AND id_user=".$_SESSION['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications User</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins"
        rel="stylesheet"
        />
    <link href="login.css" rel="stylesheet" />
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
                    <a class="navbar-brand fw-bold m-auto mt-3" href="./home.php"><b>Pendo</b>store</a>
                </nav>
                <div class="offcanvas offcanvas-start sidebar-nav" style="border: none;" tabindex="-1"
                    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-body p-0">
                        <nav class="navbar-light">
                            <ul class="navbar-nav mt-4">
                                <li class="navbar-passive">
                                    <div class="my-2">
                                        <a href="./profil_user.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-person ms-5 me-3"></i></i>Profile</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-active">
                                    <div class="my-4">
                                        <a href="./notifikasi_user.php" class="menu-active text-decoration-none text-black">
                                            <h5><i class="bi bi-bell ms-5 me-3"></i>Notifications</h5>
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
                    <h5><b>Order list</b></h5>
                    <h6 class="text-muted">Monitor incoming orders and check the progress of your shop regularly in one place</h6>
                    <hr>
               </div>
               <div class="row justify-content-end">
                   <div class="col-md-5">
                       <?php
                            if(!empty($_SESSION['message'])){
                                echo $_SESSION['message'];
                                $_SESSION['message'] = null;
                            }
                       ?>
                   </div>
               </div>
               <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <h6>New Order</h6>
                     <div class="table-responsive table-responsive-md table-responsive-sm">
                     <table class="table text-center table-bordered table-hover   ">
                    <thead>
                        <tr>
                            <td>No</td>
                            <td>Username</td>
                            <td>Email</td>
                            <td>Product name</td>
                            <td>total Price </td>
                            <td>ordered on</td>
                            <td>Action</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no=1; while($row = mysqli_fetch_array($statement)): ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $row['username']; ?></td>
                            <td><?= $row['email']; ?></td>
                            <td><?= $row['nama_produk']; ?></td>
                            <td><?= 'Rp. '.$row['harga']; ?></td>
                            <td><?= $row['created_at']; ?></td>
                            <td>
                                <a href="hapus_notif_proses.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ?')">Batal</a>
                            </td>      
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                      </table>
                  </div>
                </div>
              </div>

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