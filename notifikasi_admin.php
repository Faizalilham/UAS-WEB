<?php
    session_start();
    include('connection.php');
    if(!$_SESSION['login']){
        header("location:index.php");
    }

    $statement = mysqli_query($connection,"SELECT * FROM tb_produk WHERE del_flage = 0");
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>

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
                    <a class="navbar-brand fw-bold m-auto mt-3" href="./profil_admin.php">Administrator</a>
                </nav>
                <div class="offcanvas offcanvas-start sidebar-nav" style="border: none;" tabindex="-1"
                    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-body p-0">
                        <nav class="navbar-light">
                            <ul class="navbar-nav mt-4">
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./profil_admin.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-person ms-5 me-3"></i></i>Profile</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-passive">
                                    <div class="my-4">
                                        <a href="./unggahproduk.php" class="text-decoration-none text-black">
                                            <h5><i class="bi bi-upload ms-5 me-3"></i>Upload product</h5>
                                        </a>
                                    </div>
                                </li>
                                <li class="navbar-active">
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
                    <h5><b>Order list</b></h5>
                    <h6 class="text-muted">Monitor incoming orders and check the progress of your shop regularly in one place</h6>
                    <div class="row justify-content-end">
                        <div class="col-md-4">
                             <?php
                            if(!empty($_SESSION['message'])){
                                echo $_SESSION['message'];
                                $_SESSION['message'] = null;
                            }
                            ?>
                        </div>
                    </div>
                    <hr>
               </div>
               <div class="row">
                <div class="col-12 col-md-12 col-sm-12">
                    <h6>New Order</h6>
                     <div class="table-responsive table-responsive-md table-responsive-sm">
                     <table class="table text-center table-bordered table-hover   ">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>Nama</td>
                                <td>Gambar</td>
                                <td>Harga</td>
                                <td>Ukuran</td>
                                <td>Aksi</td>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; while($row = mysqli_fetch_array($statement)): ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $row['nama']; ?></td>
                                <td><?= '<img src="product_images/'.$row['nama_gambar'].'" class="img-fluid" width="200px" height="100px" alt="Profile">';?></td>
                                <td><?= $row['harga']; ?></td>
                                <td><?= $row['ukuran_produk']; ?></td>
                                <td>
                                    <a href="ubah_produk.php?id=<?= $row['id']; ?>" class="btn btn-primary btn-block mt-2">Ubah</a>
                                    <a href="detail_produk.php?id=<?= $row['id']; ?>" class="btn btn-secondary btn-block mt-2">Detail</a>
                                    <a href="hapus_produk.php?id=<?= $row['id']; ?>" class="btn btn-danger btn-block mt-2" onclick="return confirm('Apakah Anda yakin ?')">Hapus</a>
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