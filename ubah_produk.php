<?php

    session_start();
    include('connection.php');
    if(!$_SESSION['login']){
        header("location:index.php");
    }

    $statement = mysqli_query($connection, "SELECT * FROM tb_produk WHERE id=".$_GET['id']);
    while($row = mysqli_fetch_array($statement)){
        $id = $row['id'];
        $nama = $row['nama'];
        $nama_gambar = $row['nama_gambar'];
        $harga = $row['harga'];
        $ukuran = $row['ukuran_produk'];
        $deskripsi = $row['deskripsi'];
        $kategori = $row['categori'];

    }
    $get_id = $_GET['id'];  
    $statement2 = mysqli_query($connection,"SELECT * FROM tb_coment 
    INNER JOIN tb_register ON tb_register.id = tb_coment.id_user WHERE tb_coment.id_produk='$get_id' AND tb_coment.del_flage=0");

?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Product</title>

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
                    <a class="navbar-brand fw-bold m-auto" href="#">Akun Saya</a>
                </nav>
                <div class="offcanvas offcanvas-start sidebar-nav" style="border: none;" tabindex="-1"
                    id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">

                    <div class="offcanvas-body p-0">
                        <nav class="navbar-light">
                            <ul class="navbar-nav mt-5">
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
                                            <h5><i class="bi bi-upload ms-5 me-3"></i>Upload Product</h5>
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
                    <h5><b>Change Product</b></h5>
                    <h6 class="text-muted">change the product according to the needs of your shop</h6>
                    <hr>
               </div>

               <form action="ubah_produk_proses.php"  enctype="multipart/form-data" method="POST">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12 col-sm-3 col-md-2">
                                <p>Product Name</p>
                            </div>
                            <div class="col-12 col-sm-3 col-md-10">
                                <input type="text" class="form-control" name="nama_produk" value="<?php echo $nama;?>" required>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-12 col-sm-3 col-md-2">
                                <p class="mt-3">Product Pictures</p>
                            </div>
                            <div class="col-6 col-sm-3 col-md-2">
                                    <?php $_SESSION['image'] = '<img src="product_images/'.$nama_gambar.'" class="img-fluid rounded-circle" width="200px" height="100px" alt="Profile">'; echo $_SESSION['image']; ?>
                                    <label class="btn btn-default btn-file">
                                        Select Image <input type="file" style="display: none;" name="gambar">
                                    </label>
                            </div>
                            <div class="col-6 col-sm-5 col-md-5">
                                <p class="text-muted mt-4">
                                    File size : Max. 1MB <br>
                                    File format : .JPG, .PNG
                                </p>
                            </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-12 col-sm-3 col-md-2">
                                    <p>Price</p>
                                </div>
                                <div class="col-12 col-sm-3 col-md-10"> 
                                    <input type="number" class="form-control" name="harga" value="<?php echo $harga; ?>" required>
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-12 col-sm-3 col-md-2">
                                    <p>Size</p>
                                </div>
                                <div class="col-12 col-sm-3 col-md-10">
                                    <input type="text" class="form-control" name="ukuran" value="<?php echo $ukuran;?>" required>
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $id;?>" required>
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-12 col-sm-3 col-md-2">
                                    <p>Category</p>
                                </div>
                                <div class="col-12 col-sm-3 col-md-10">
                                   <select class = "form-control" name="kategori" id="kategori" required>
                                        <option value="man"<?=$kategori == 'man' ? ' selected="selected"' : '';?>>Man</option>
                                        <option value="woman"<?=$kategori == 'woman' ? ' selected="selected"' : '';?>>Woman</option>
                                   </select>
                                </div>
                        </div>
                        <div class="row mt-3">
                                <div class="col-12 col-sm-3 col-md-2">
                                    <p>Description</p>
                                </div>
                                <div class="col-12 col-sm-3 col-md-10">
                                    <textarea class="form-control" id ="deskripsi" name ="deskripsi" required><?php echo $deskripsi;?>" </textarea>
                                </div>
                            </div>

                            <div class="row mt-3 text-end">
                                <div class="col-12 col-sm-12 col-md-12">
                                    <input type="submit" name="submit" class="btn btn-dark" value="Save" onclick="return confirm('Are you sure ?')">
                                </div>
                            </div>

                    </div>            
               </form>   
            </div>
            <div class="card shadow mt-3">
                <div class="card-header">
                    <b>Comment</b>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php $no = 1; while($row2 = mysqli_fetch_array($statement2)): ?>
                        <div class="col-md-1 col-1 col-sm-1">
                            <img src="product_images/<?= $row2['nama_gambar']; ?>"
                            alt="..." class="rounded-circle" width="80px" height="80px">
                        </div>
                        <div class="col-md-8 col-md-10 ms-2 ">
                          <p>
                            <b><?=  $row2['nama']; ?></b>  
                         </p>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i> <br>
                          <?=  $row2['komentar']; ?>
                        </div>
                        <div class="row justify-content-end">
                          <div class="col-md-1">
                                <a href="hapus_coment_admin.php?id=<?= $row2['id_coment'] ."&barang=".$_GET['id']; ?>" class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ?')">Delete</a>
                          </div>
                          <div class="col-md-1">
                              
                              <a data-bs-toggle="modal" data-bs-target="#exampleModalupdate" class="btn btn-primary btn-block">Update</a>
                          </div>
                          <div class="modal fade" id="exampleModalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalupdate<?php echo $no ?>">Update Coment</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="Detail_update_coment_admin.php" method="POST">
                                <div class="modal-body">
                                  <input type="text" class="form-control" name="komentar" required>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <input type="hidden" name="id_coment" value="<?= $row2['id_coment']?>">
                                  <input type="hidden" name="id_produk" value="<?= $_GET['id']; ?>">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                  <!-- <a type="submit" name="submit" href="Detail_update_coment_admin.php?id=<?= $row2['id_coment'] ."&barang=".$_GET['id']; ?>"  class="btn btn-primary btn-block">Update</a> -->
                                </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>
                        <p class="text-muted text-end  mt-3"><?= $row2['created_at']; ?></p>
                        <hr> 

                     <?php $no++; endwhile; ?>   
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