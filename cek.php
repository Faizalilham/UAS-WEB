<?php

  session_start();
  include('connection.php');
  if(!$_SESSION['login_user']){
    header('location:index.php');
  }

  $statement = mysqli_query($connection,"SELECT * FROM tb_produk WHERE del_flage = 0");
  

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

    <link href="./index.css" rel="stylesheet" />

    <title>Pendo Store</title>
  </head>

  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="./index.html"><b>Pendo</b>store</a>
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
            <a class="nav-link active" aria-current="page" href="#home">Home</a>
            <a class="nav-link" href="#News">News</a>
            <a class="nav-link" href="#Woman">Woman</a>
            <a class="nav-link" href="#Man">Man</a>
            <a
              class="nav-link ms-2"
              href="./Checkout.html"
              data-bs-toggle="modal"
              data-bs-target="#exampleModal"
              ><i class="bi bi-cart"></i
            ></a>

            <a class="nav-link ms-2" href="./profil_user.php">
              <i class="bi bi-person-circle"></i
            ></a>
          </div>
        </div>
      </div>
    </nav>
    <!-- Finish Navbar -->

    <!-- Corousel -->
    <section id="home">
      <div
        id="carouselExampleIndicators"
        class="carousel slide mt-5"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="0"
            class="active"
            aria-current="true"
            aria-label="Slide 1"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="1"
            aria-label="Slide 2"
          ></button>
          <button
            type="button"
            data-bs-target="#carouselExampleIndicators"
            data-bs-slide-to="2"
            aria-label="Slide 3"
          ></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="./banner1.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="./banner2.png" class="d-block w-100" alt="..." />
          </div>
          <div class="carousel-item">
            <img src="./banner3.png" class="d-block w-100" alt="..." />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleIndicators"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </section>
    <!-- Finish Corousel -->

    <!-- Form -->
    <section>
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <form class="d-flex">
              <input
                class="form-control me-2 mt-4 shadow"
                type="search"
                placeholder="Type Something..."
                aria-label="Search"
              />
              <a
                href="#Woman"
                type="button"
                class="btn btn-outline-dark mt-4 shadow"
                type="submit"
              >
                <p class="mt-2">Search</p>
              </a>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- Finish Form -->

    <!-- News -->
    <section id="News">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12">
            <h1 class="text-center mt-5"><b>News</b></h1>
            <hr class="mx-auto bg-secondary" />
            <h6 class="mb-5 text-center">What's news in October</h6>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-4 col-sm-4 col-md-4 mb-xs-4 mb-4">
            <div class="image">
              <img
                class="myimage"
                src="https://www.adidas.co.id/media/wysiwyg/New_TC_1_1.jpg"
                alt="..."
              />
              <div class="image_overlay text-center">
                <div><b>Extreme rare sneakers</b></div>
              </div>
            </div>
          </div>
          <div class="col-4 col-sm-4 col-md-4 mb-xs-4 mb-4">
            <div class="image">
              <img
                class="myimage"
                src="https://www.adidas.co.id/media/wysiwyg/1050x1400.jpg"
                alt="..."
              />
              <div class="image_overlay text-center">
                <div><b>Enjoy with superturf</b></div>
              </div>
            </div>
          </div>
          <div class="col-4 col-sm-4 col-md--4 mb-xs-4 mb-4">
            <div class="image">
              <img
                class="myimage"
                src="https://brand.assets.adidas.com/image/upload/f_auto,q_auto,fl_lossy/enSG/Images/zozo-launch-teaser_tcm207-791425.jpg"
                alt="..."
              />
              <div class="image_overlay text-center">
                <div><b>Limited Edition Stan Smith Golf</b></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Finish News -->

    <!-- Woman -->
    <section id="Woman">
      <div class="container mt-5">
        <div class="row">
          <div class="col-sm-12 col-md-12 text-center">
            <h2><b> Woman</b></h2>
            <hr class="mx-auto bg-secondary" />
            <h6 class="mb-5">All about Woman</h6>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div
              id="carouselExampleIndicators-2"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-indicators">
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators-2"
                  data-bs-slide-to="0"
                  class="active"
                  aria-current="true"
                  aria-label="Slide 1"
                ></button>
                <button
                  type="button"
                  data-bs-target="#carouselExampleIndicators-2"
                  data-bs-slide-to="1"
                  aria-label="Slide 2"
                ></button>
              </div>
              <div class="P carousel-inner">
                <div class="carousel-item active">
                  <div class="row">
                    <?php $no=1; while($no <= 4):?>
                      <?php $row = mysqli_fetch_array($statement)?>
                        <?php if($no > 2):?>
                          <div class="col-12 col-md-3 col-sm-6 d-none d-sm-block d-md-block">
                            <div class="card text-center shadow">
                              <img
                                src="product_images/<?= $row['nama_gambar']; ?>"
                                class="card-img-top"
                                alt="..."
                              />
                              <div class="card-body">
                                <p class="card-text">
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                </p>
                                <h5 class="card-title">
                                  <?= $row['nama']; ?>
                                </h5>
                                <h5 class="card-title"><b><?= $row['harga']; ?></b></h5>
                                <a
                                  href="./Detail.html"
                                  target="_blank"
                                  class="btn btn-dark text-uppercase"
                                  >Shop now</a
                                >
                              </div>
                            </div>
                          </div>
                          <?php else: ?>
                            <div class="col-12 col-md-3 col-sm-6">
                            <div class="card text-center shadow">
                              <img
                                src="product_images/<?= $row['nama_gambar']; ?>"
                                class="card-img-top"
                                alt="..."
                              />
                              <div class="card-body">
                                <p class="card-text">
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                </p>
                                <h5 class="card-title">
                                  <?= $row['nama']; ?>
                                </h5>
                                <h5 class="card-title"><b><?= $row['harga']; ?></b></h5>
                                <a
                                  href="./Detail.php"
                                  target="_blank"
                                  class="btn btn-dark text-uppercase"
                                  >Shop now</a
                                >
                              </div>
                            </div>
                          </div>
                      <?php endif; $no++; ?>  
                     <?php endwhile; ?>   
                    
                    <!-- <div class="col-12 col-md-3 col-sm-6 d-sm-block">
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/y/gy8341_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."```1
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Shoes Superturf Adventure SW
                          </h5>
                          <h5 class="card-title"><b>$ 400</b></h5>
                          <a
                            href="./Detail.html"
                            target="_blank"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="
                        col-12 col-md-3 col-sm-6
                        d-none d-md-block d-sm-block
                      "
                    >
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/h/0/h01087_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Ultraboost 21 x Marimekko Shoes
                          </h5>
                          <h5 class="card-title"><b>$ 400</b></h5>
                          <a
                            href="./Detail.html"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="
                        col-12 col-md-3 col-sm-6
                        d-none d-sm-none d-md-block
                      "
                    >
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/s/4/s42549_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Supernova Shoes by adidas limited
                          </h5>
                          <h5 class="card-title"><b>$ 480</b></h5>
                          <a
                            href="./Detail.html"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="
                        col-12 col-md-3 col-sm-6
                        d-sm-none d-none d-md-block
                      "
                    >
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/5/g55649_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Ultraboost shoes 21 x Parley Adidas
                          </h5>
                          <h5 class="card-title"><b>$ 500</b></h5>
                          <a
                            href="./Detail.html"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div> 
                     </div>  -->
                  </div>
                </div>
                <div class="carousel-item">
                  <div class="row"> 
                    <?php $no=1; while($no <= 4):?>
                      <?php $row = mysqli_fetch_array($statement)?>
                        <?php if($no > 2):?>
                          <div class="col-12 col-md-3 col-sm-6 d-none d-sm-block d-md-block">
                            <div class="card text-center shadow">
                              <img
                                src="product_images/<?= $row['nama_gambar']; ?>"
                                class="card-img-top"
                                alt="..."
                              />
                              <div class="card-body">
                                <p class="card-text">
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                </p>
                                <h5 class="card-title">
                                  <?= $row['nama']; ?>
                                </h5>
                                <h5 class="card-title"><b><?= $row['harga']; ?></b></h5>
                                <a
                                  href="Detail.php?id=<?= $row['id']; ?>"
                                  target="_blank"
                                  class="btn btn-dark text-uppercase"
                                  >Shop now</a
                                >
                              </div>
                            </div>
                          </div>
                          <?php else: ?>
                            <div class="col-12 col-md-3 col-sm-6">
                            <div class="card text-center shadow">
                              <img
                                src="product_images/<?= $row['nama_gambar']; ?>"
                                class="card-img-top"
                                alt="..."
                              />
                              <div class="card-body">
                                <p class="card-text">
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                  <i class="bi bi-star-fill text-warning"></i>
                                </p>
                                <h5 class="card-title">
                                  <?= $row['nama']; ?>
                                </h5>
                                <h5 class="card-title"><b><?= $row['harga']; ?></b></h5>
                                <a
                                  href="Detail.php?id=<?= $row['id']; ?>"
                                  target="_blank"
                                  class="btn btn-dark text-uppercase"
                                  >Shop now</a
                                >
                              </div>
                            </div>
                          </div>
                      <?php endif; $no++; ?>  
                     <?php endwhile; ?>   
                    <!-- <div class="col-12 col-md-3 col-sm-6 d-sm-block">
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/z/gz2694_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Court Bold simple shoes Adidas
                          </h5>
                          <h5 class="card-title"><b>$ 700</b></h5>
                          <a
                            href="./Detail.html"
                            target="_blank"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="
                        col-12 col-md-3 col-sm-6
                        d-none d-md-block d-sm-block
                      "
                    >
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/h/0/h02809_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Earthlight shoes Mesh adidas
                          </h5>
                          <h5 class="card-title"><b>$ 420</b></h5>
                          <a
                            href="./Detail.html"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="
                        col-12 col-md-3 col-sm-6
                        d-none d-sm-none d-md-block
                      "
                    >
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/f/x/fx1957_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">
                            Ultraboost shoes 20 by Adidas
                          </h5>
                          <h5 class="card-title"><b>$ 500</b></h5>
                          <a
                            href="./Detail.html"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                    <div
                      class="
                        col-12 col-md-3 col-sm-6
                        d-none d-sm-none d-md-block
                      "
                    >
                      <div class="card text-center shadow">
                        <img
                          src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/h/0/h00099_smc_ecom.jpg"
                          class="card-img-top"
                          alt="..."
                        />
                        <div class="card-body">
                          <p class="card-text">
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                            <i class="bi bi-star-fill text-warning"></i>
                          </p>
                          <h5 class="card-title">Ultraboost shoes 21 Adidas</h5>
                          <h5 class="card-title"><b>$ 500</b></h5>
                          <a
                            href="./Detail.html"
                            class="btn btn-dark text-uppercase"
                            >Shop now</a
                          >
                        </div>
                      </div>
                    </div>
                  </div> -->
                </div>
              </div>
              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#carouselExampleIndicators-2"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#carouselExampleIndicators-2"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Finish Woman -->

    <!-- Man -->

    <section id="Man">
      <div class="container mt-3">
        <div class="row">
          <div class="col-sm-12 text-center mt-5">
            <h2><b>Man</b></h2>
            <hr class="mx-auto bg-secondary" />
            <h6 class="mb-5">All about Man</h6>
          </div>
        </div>

        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div
                id="carouselExampleIndicators-3"
                class="carousel slide"
                data-bs-ride="carousel"
              >
                <div class="carousel-indicators">
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators-3"
                    data-bs-slide-to="0"
                    class="active"
                    aria-current="true"
                    aria-label="Slide 1"
                  ></button>
                  <button
                    type="button"
                    data-bs-target="#carouselExampleIndicators-3"
                    data-bs-slide-to="1"
                    aria-label="Slide 2"
                  ></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <div class="row">
                      <div class="col-md-3 col-12 col-sm-6 d-block d-sm-block">
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/h/6/h69013_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Dame 7 Extply simple shoes
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              target="_blank"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/v/gv7273_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Donovan shoes mitchell D.O.N Issue
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                      <div
                        class="col-md-3 d-none d-md-block col-sm-6 d-sm-block"
                      >
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/z/gz2996_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Exhibit A EE simple shoes Adidas
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/x/gx3078_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Shoes Ultraboost simple 5.0 DNA
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="row">
                      <div class="col-md-3 col-sm-6 d-sm-block">
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/f/z/fz3406_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Terrex hiking shoes urban low
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              target="_blank"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/5/g58016_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Sepatu Futsal Gamemode Indoor
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                      <div
                        class="col-md-3 d-none d-md-block col-sm-6 d-sm-block"
                      >
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/g/y/gy8107_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Ultraboost 20 Explorer Shoes adidas
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                      <div class="col-md-3 d-none d-md-block">
                        <div class="card text-center shadow">
                          <img
                            src="https://www.adidas.co.id/media/catalog/product/cache/b4d35d4f8c43032a04e969b4c3a6af8a/f/z/fz3403_smc_ecom.jpg"
                            class="card-img-top"
                            alt="..."
                          />
                          <div class="card-body">
                            <p class="card-text">
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                              <i class="bi bi-star-fill text-warning"></i>
                            </p>
                            <h5 class="card-title">
                              Terrex Superblue Hiking Shoes
                            </h5>
                            <h5 class="card-title"><b>$ 400</b></h5>
                            <a
                              href="./Detail.html"
                              class="btn btn-dark text-uppercase"
                              >Shop now</a
                            >
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <button
                  class="carousel-control-prev"
                  type="button"
                  data-bs-target="#carouselExampleIndicators-3"
                  data-bs-slide="prev"
                >
                  <span
                    class="carousel-control-prev-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button
                  class="carousel-control-next"
                  type="button"
                  data-bs-target="#carouselExampleIndicators-3"
                  data-bs-slide="next"
                >
                  <span
                    class="carousel-control-next-icon"
                    aria-hidden="true"
                  ></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Finish Man -->

    <!-- Discount -->
    <section>
      <div class="banner container shadow">
        <img src="./banner3.png" width="100%" height="200px" alt="..." />
      </div>
    </section>

    <!-- Finish Discount -->

    <!-- Footer -->
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
              <audio id="audio" autoplay="autoplay" controls class="d-none">
                <source src="./FadeIn2.mp3" type="audio/mp3" />
                Your browser does not support the audio element.
              </audio>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->

    <!-- Seperate -->
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
      integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/js/bootstrap.bundle.min.js"
      integrity="sha384-BOsAfwzjNJHrJ8cZidOg56tcQWfp6y72vEJ8xQ9w6Quywb24iOsW913URv1IS4GD"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
