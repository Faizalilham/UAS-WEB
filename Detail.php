<?php

  session_start();
  include('connection.php');
  if(!$_SESSION['login_user']){
    header('location:index.php');
  }

  $statement = mysqli_query($connection,"SELECT * FROM tb_produk WHERE id=".$_GET['id']);
  while($row = mysqli_fetch_array($statement)){
        $id = $row['id'];
        $nama = $row['nama'];
        $nama_gambar = $row['nama_gambar'];
        $harga = $row['harga'];
        $ukuran = $row['ukuran_produk'];
        $deskripsi = $row['deskripsi'];
    }
    
  $get_id = $_GET['id'];  
  $statement2 = mysqli_query($connection,"SELECT * FROM tb_coment 
  INNER JOIN tb_register ON tb_register.id = tb_coment.id_user WHERE tb_coment.id_produk='$get_id' AND tb_coment.del_flage=0");
               
              

?>



<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css"
    />
        <link
      href="https://fonts.googleapis.com/css?family=Poppins"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="./Detail.css" />

    <title>Detail Product</title>
  </head>
  <body>
    <!-- Navbar -->
    <nav
      class="
        navbar navbar-expand-lg navbar-dark
        bg-dark
        fixed-top
        position-relative
        mb-3
      "
    >
      <div class="container">
        <a class="navbar-brand" href="./home.php"><b>Pendo</b>store</a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto">
            <a class="nav-link active" aria-current="page" href="#home.php">Home</a>
            <a class="nav-link" href="./home.php">News</a>
            <a class="nav-link" href="./home.php">Woman</a>
            <a class="nav-link" href="./home.php">Man</a>
            <a class="nav-link ms-2" href="./Checkout.php"><i class="bi bi-cart"></i></a>
            <a class="nav-link ms-2" href="./profil_user.php">
              <i class="bi bi-person-circle"></i
            ></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Finish Navbar -->

    <!-- Detail Produk -->
    <section id="detail_produk">
      <div class="container">
        <div class="card mb-3 position-relative shadow">
          <div class="row ">
            <div class="col-md-4 col-12 col-sm-12">
              <div class="imagezoom">
                  <img
                    src="product_images/<?= $nama_gambar; ?>"
                    class="zoomimg img-fluid rounded-start"
                    alt="..."
                    width="100%"
                  />
              </div>
            
              <div class="row mt-3 text-center">
                  <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel" style="height: 80px;">
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                              <div class="col-3 col-sm-3 col-md-3">
                                  <img
                                    src="product_images/<?= $nama_gambar; ?>"
                                    class="zoomimg img-fluid rounded-start"
                                    alt="..."
                                    width="100%"
                                    height="10px"
                                  />
                              </div>
                              <div class="col-3 col-sm-3 col-md-3">
                                  <img
                                    src="product_images/<?= $nama_gambar; ?>"
                                    class="img-fluid rounded-start"
                                    alt="..."
                                    width="100%"
                                    height="10px"
                                  />
                              </div>
                              <div class="col-3 col-sm-3 col-md-3">
                                  <img
                                    src="product_images/<?= $nama_gambar; ?>"
                                    class="img-fluid rounded-start"
                                    alt="..."
                                    width="100%"
                                    height="10px"
                                  />
                              </div>
                              <div class="col-3 col-sm-3 col-md-3">
                                  <img
                                    src="product_images/<?= $nama_gambar; ?>"
                                    class="img-fluid rounded-start"
                                    alt="..."
                                    width="100%"
                                    height="10px"
                                  />
                              </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row">
                              <div class="col-3 col-sm-3 col-md-3">
                                 <img src="product_images/<?= $nama_gambar; ?>" class="d-block w-100" alt="...">
                              </div>
                              <div class="col-3 col-sm-3 col-md-3">
                                  <img src="product_images/<?= $nama_gambar; ?>" class="d-block w-100" alt="...">
                              </div>
                              <div class="col-3 col-sm-3 col-md-3">
                               
                                  <img src="product_images/<?= $nama_gambar; ?>" class="d-block w-100" alt="...">
                              </div>
                              <div class="col-3 col-sm-3 col-md-3">
                                  <img src="product_images/<?= $nama_gambar; ?>" class="d-block w-100" alt="...">
                              </div>
                            </div>
                        </div>
                      </div>
                      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                      </button>
                      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                      </button>
                    </div>
              </div>

            </div>
            <div class="col-md-8">
              <div class="card-body">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                       <li class="breadcrumb-item"><a href="./index.html">Home</a></li>
                       <li class="breadcrumb-item active" aria-current="page">Detail</li>
                    </ol>
                </nav>
                <h5 class="card-title"><b><?php echo $nama; ?></b></h5>
                <p class="card-text">
                    <div class="row">
                        <div class="col-sm-12">
                             <i class="bi bi-star-fill text-warning"></i>
                             <i class="bi bi-star-fill text-warning"></i>
                             <i class="bi bi-star-fill text-warning"></i>
                             <i class="bi bi-star-fill text-warning"></i>
                             <i class="bi bi-star-fill text-warning"></i>
                             | 692 Evaluation | 1024 sold
                        </div>
                    </div>
                </p>


                 <p class="card-text">     
                        <div class="d-inline p-2 text-muted fs-4 text-decoration-line-through col-3">Rp.600000 - Rp. 650000</div> 
                        <div class="d-inline p-2 fs-4 col-3"><i class="bi bi-arrow-right"></i> </div>  
                        <div class="d-inline p-2 fs-4 col-3"><?php echo 'Rp. '.$harga; ?></div>  
                         <div class="d-inline p-2 fs-4 col-3">          
                            <img src="https://www.pngplay.com/wp-content/uploads/7/20-Discount-PNG-HD-Quality.png" alt=""
                            width="40px" style="margin-top: -20px;">
                         </div>            
                </p>

                <p class="card-text">     
                   <div class="row">
                     <div class="col-2 col-md-2 col-sm-2">
                        <img src="https://deo.shopeemobile.com/shopee/shopee-pcmall-live-sg//assets/1cdd37339544d858f4d0ade5723cd477.png" width="100%" height="70px">
                     </div>
                     <div class="col-10 col-md-10 col-sm-10">
                        <p>free shipping</p>
                        <p>Free Shipping with a minimum spend of Rp.500000</p>
                     </div>
                   </div>
                </p>

                    <div class="row mt-3">
                      <div class="col-12 col-sm-2 col-md-2">
                        <p class="mt-2">Size (eur)</p>
                      </div>
                      <div class="col-12 col-sm-6 col-md-4">
                           <div class="input-group">
                              <input type="text" class="form-control" value="<?php  echo $ukuran; ?>" disabled>
                            </div>
                          </div>
                    </div>

                    <!-- Add to cart -->
                    <button
                        type="button"
                        class="btn btn-outline-dark mt-2"
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                      >
                      Add to cart <i class="bi bi-cart-plus ms-2"></i> 
                   </button>

                    <!-- show alert -->
                    <div
                      class="modal fade"
                      id="exampleModal"
                      tabindex="-1"
                      aria-labelledby="exampleModalLabel"
                      aria-hidden="true"
                      >
                        <div class="modal-dialog">
                          <div class="alert alert-success alert-dismissible fade show">
                            Product has been added to cart
                            <button
                              type="button"
                              class="btn-close"
                              data-bs-dismiss="alert"
                              aria-label="Close"
                            ></button>
                          </div>
                        </div>
                      </div>
                    <a type="button" class="btn btn-dark mt-2  ms-2" href="Checkout.php?id=<?= $id; ?>">Shop Now  <i class="bi bi-bag-check ms-2"></i></a>
                     
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
     <!-- Finish Detail Produk -->

    <!-- Spesification Product -->
    <section>
        <div class="container">
            <div class="card shadow">
                 <div class="card-header">
                    <b>Product Specifications & Description</b>
                </div>
                <div class="card-body  justify-content-around">
                     <p>  
                      <?php echo $deskripsi; ?>
                    </p>
                     
                    <div class="collapse mt-4" id="collapseExample"> 
                        <h3 class="mb-4"><b>Specifications</b></h3>  
                        <div class="row">
                          <div class="col-12 col-md-6">
                              <ul>
                                <li class="mb-3">Regular Fit</li>
                                <li class="mb-3">Vegan Upper</li>
                                <li class="mb-3">Cork Sockliner</li>
                                <li class="mb-3">Detachable Bag</li>
                              </ul>
                          </div>
                          <div class="col-12 col-md-6">
                              <ul>
                                <li class="mb-3">Rubber Outsole</li>
                                <li class="mb-3">Color: Mesa / Halo Amber / Glory Purple</li>
                                <li class="mb-3">Product code: GY8341</li>
                              </ul>
                          </div>
                        </div>   
                    </div>
                     <a data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
                        Lihat Selengkapnya
                      </a>
                    
                </div>
            </div>
        </div>

    </section>
     <!-- Finish SPesification Product -->


     <!-- Comment -->
     <section>
        <div class="container mt-3">
            <div class="card shadow">
                 <div class="card-header">
                    <b>Comment</b>
                </div>
                <div class="card-body">
                  <div class="row">
                    <?php $no = 1; while($row2 = mysqli_fetch_array($statement2)): ?>
                        <div class="col-md-1 col-md-1 ">
                            <img src="product_images/<?= $row2['nama_gambar']; ?>"
                            alt="..." class="rounded-circle shadow ">
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
                                <a href="hapus_coment.php?id=<?= $row2['id_coment'] ."&barang=".$_GET['id']; ?>" class="btn btn-danger btn-block" onclick="return confirm('Apakah Anda yakin ?')">Delete</a>
                          </div>
                          <div class="col-md-1">
                              
                              <a data-bs-toggle="modal" data-bs-target="#exampleModalupdate" class="btn btn-primary btn-block">Update</a>
                          </div>
                          <div class="modal fade" id="exampleModalupdate" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalupdate<?php echo $no ?>">Modal title</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form action="Detail_update_coment.php" method="POST">
                                <div class="modal-body">
                                  <input type="text" class="form-control" name="komentar" required>
                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                  <input type="hidden" name="id_coment" value="<?= $row2['id_coment']?>">
                                  <input type="hidden" name="id_produk" value="<?= $_GET['id']; ?>">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Update">
                                  <!-- <a href="Detail_update_coment.php?id=<?= $row2['id_coment'] ."&barang=".$_GET['id']; ?>"  class="btn btn-primary btn-block">Update</a> -->
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
                 

                   <!-- <div class="row">
                    <div class="col-md-1 col-md-1">
                         <img src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2021/10/20/2736514589.jpg"
                         alt="..." class="rounded-circle shadow ">
                    </div>
                    <div class="col-md-10 col-md-10 ms-2">
                      <p>
                        <b>Faizal</b>
                    </p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> <br>
                        Nice Product <i class="bi bi-emoji-heart-eyes text-danger"></i>
                        
                    </div>
                    <p class="text-muted text-end mt-3">yesterday, 27 oct 2021</p>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-md-1 col-md-1 ">
                         <img src="https://i.zoomtventertainment.com/story/lisa_new_single_0.jpg?tr=w-400,h-300,fo-auto"
                         alt="..." class="rounded-circle shadow ">
                    </div>
                    <div class="col-md-10 col-md-10 ms-2">
                      <p>
                        <b>Lisa</b>
                    </p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> <br>
                         나는 당신을 사랑합니다 웹 소유자           
                    </div>
                     <p class="text-muted text-end mt-3">13 hours ago, 27 oct 2021</p>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-md-1 col-md-1 ">
                         <img src="https://pbs.twimg.com/profile_images/1370218564406308869/U41IXo3o_400x400.jpg"
                         alt="..." class="rounded-circle shadow ">
                    </div>
                    <div class="col-md-10 col-md-10 ms-2">
                      <p>
                        <b>Falakh</b>
                    </p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> <br>
                       Comfortable to wear, especially for outdoor, these shoes are also suitable for young people who like today's trend.
                    </div>
                    <p class="text-muted text-end mt-3">3 hours ago, 27 oct 2021</p>
                  </div>
                  <hr>
                   <div class="row">
                    <div class="col-md-1 col-md-1">
                         <img src="https://cdn0-production-images-kly.akamaized.net/FSCwzpdqi-TJMhKavSJE3uhXrMI=/640x640/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2832638/original/037807400_1560947825-20190619-Anya-Geraldine-1.jpg"
                         alt="..." class="rounded-circle shadow ">
                    </div>
                    <div class="col-md-10 col-md-10 ms-2">
                      <p>
                        <b>Anya Geraldine</b>
                    </p>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i>
                        <i class="bi bi-star-fill text-warning"></i> <br>
                        Like this creator site, love you <i class="bi bi-heart-fill text-danger"></i>
                    </div>
                    <div class="col-12 col-sm-4 col-md-4 mt-3">
                        <audio controls>
                            <source src="./kmu_punyaku.mp3" type="audio/mpeg">
                          Your browser does not support the audio element.
                    </audio>
                    </div>
                     <p class="text-muted text-end mt-3">2 hours ago, 27 oct 2021</p>
                  </div> -->
                  

                  <!-- Create Collapse -->
                  <!-- <div class="row mt-2">
                    <div class="col-12">


                      <div class="collapse " id="collapseExample">
                        
                          <div class="row">
                            <hr>
                            <div class="col-md-1 col-md-1">
                              <img
                                src="product_images/<?= $nama_gambar_coment; ?>"
                                alt="..."
                                class="rounded-circle shadow"
                              />
                            </div>
                            <div class="col-md-10 col-md-10 ms-2">
                              <p>
                                <b><?php echo $nama_coment; ?></b>
                              </p>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i> <br />
                              <?php echo $komentar; ?>
                            </div>
                            <p class="text-muted text-end mt-3"><?php echo $created_at; ?></p>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-md-1 col-md-1">
                              <img
                                src="https://scontent.fsrg3-1.fna.fbcdn.net/v/t1.6435-9/67692802_107174227290584_2169775138151596032_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=973b4a&_nc_ohc=-UV5xco05SQAX8UfWtu&_nc_ht=scontent.fsrg3-1.fna&oh=81f84110e504a36ce3344d1ff7d68ce1&oe=61A3D441"
                                alt="..."
                                class="rounded-circle shadow"
                              />
                            </div>
                            <div class="col-md-10 col-md-10 ms-2">
                              <p>
                                <b>Feby Putri Nilam Cahyani</b>
                              </p>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i> <br />
                              Come on sing collaboration with me
                            </div>
                            <p class="text-muted text-end mt-3">8 days ago,27 oct 2021</p>
                          </div>
                          <hr>
                          <div class="row">
                            <div class="col-md-1 col-md-1">
                              <img
                                src="https://assets.pikiran-rakyat.com/crop/0x0:0x0/x/photo/2020/09/23/4204355934.jpg"
                                alt="..."
                                class="rounded-circle shadow"
                              />
                            </div>
                            <div class="col-md-10 col-md-10 ms-2">
                              <p>
                                <b>Dinar Candy</b>
                              </p>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i> <br />
                              The material is hard but delicious
                            </div>
                            <p class="text-muted text-end mt-3">7 days ago,27 oct 2021</p>
                          </div>
                        </div>
                      </div>
                      
                        <a
                        class="text-muted"
                        data-bs-toggle="collapse"
                        href="#collapseExample"
                        role="button"
                        aria-expanded="false"
                        aria-controls="collapseExample"
                        >More Comment</a
                      >

                  </div>
                   Create Collapse -->

                  <hr>

                  <form action="Detail_proses.php" method="POST">
                    <div class="container" >
                       <label for="floatingTextarea2" class="mb-2"><b>Comments</b></label>
                      <div class="form-floating">
                         <textarea class="form-control" name="komentar" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                         <label for="floatingTextarea2" class="mb-2 text-muted"></label>
                            <input type="submit" name="submit_coment" class="btn btn-dark mt-3 ms-auto" value="Publish"> 
                            <input type="hidden" name="id_produk" value="<?php echo $id; ?>">
                            <input type="hidden" name="id_user" value="<?php echo $_SESSION['id']; ?>">

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


                      </div>
                   </div> 
                  </form>
                  
                </div>
            </div>
        </div>

     </section>
     <!-- Finish Comment -->


    <footer>
      <div class="col-md-12 bg-dark text-white mt-5">
        <div class="container">
          <div class="row">
            <div class="col-md-3 mt-5">
              <h5 class="mb-2"><b>Pendo</b>store</h5>
              <a href="https://www.facebook.com" target="_blank"
                ><i class="bi bi-facebook text-primary"></i
              ></a>
              <a href="https://www.instagram.com/faizalfalakh" target="_blank"
                ><i class="bi bi-instagram text-danger"></i
              ></a>
              <a href="https://www.github.com/Faizalilham" target="_blank"
                ><i class="bi bi-github text-white"></i
              ></a>
              <p class="mt-3">2021 All rights reserved</p>
              <p>
                Created with <i class="bi bi-heart-fill text-danger"></i> by
                Faizal Falakh
              </p>
            </div>
            <div class="col-md-3 mt-5">
              <h5><b>Sport</b></h5>
              <br />
              <p>Predators Football Boots</p>
              <p>X Football Boots</p>
              <p>X Football Boots</p>
              <p>Nemeziz Football Boots</p>
            </div>
            <div class="col-md-3 mt-5">
              <h5><b>Collection</b></h5>
              <br />
              <p>Stan Smith</p>
              <p>Superstar</p>
              <p>Ultraboost</p>
              <p>NMD</p>
            </div>
            <div class="col-md-3 mt-5">
              <h5><b>Contact</b></h5>
              <br />
              <p>Jalan Wungu III No.27 Rt.04/06 Pangkah,Tegal</p>
              <p>+62 895-4219-71694</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
