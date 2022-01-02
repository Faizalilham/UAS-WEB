<?php

  session_start();
  include('connection.php');
  if(!$_SESSION['login_user']){
    header('location:index.php');
  }

  $statement = mysqli_query($connection,"SELECT * FROM tb_produk WHERE id=".$_GET['id']);
  while($cek = mysqli_fetch_array($statement)){
    $id = $cek['id'];
    $nama_gambar = $cek['nama_gambar'];
    $nama = $cek['nama'];
    $harga = $cek['harga'];
  }


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Checkout Page</title>

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

    <link rel="stylesheet" href="./checkout.css" />
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
            <a class="nav-link active" aria-current="page" href="./home.php">Home</a>
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

    <!-- Personal Form -->
    <div class="container mb-3">
      <div class="card shadow">
        <div class="card-header">
          <i class="bi bi-person-plus-fill text-primary"></i>
          <b class="ms-2 text-primary">Personal data form </b>
        </div>
        <div class="card-body">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./home.php">Home</a></li>
              <li class="breadcrumb-item">
                <a href="./Detail.php">Detail</a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">
                Checkout
              </li>
            </ol>
          </nav>
          <form action="checkout_proses.php" method="POST">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"
                        >Firstname</label
                      >
                      <input
                        type="text"
                        placeholder="firstname"
                        class="form-control"
                        id="exampleInputPassword1"
                        name="firstname"
                        required
                      />
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label"
                        >Lastname</label
                      >
                      <input
                        type="text"
                        name="lastname"
                        placeholder="Lastname"
                        class="form-control"
                        id="exampleInputPassword1"
                        required
                      />
                      <input
                        type="hidden"
                        name="nama_produk"
                        value="<?php echo $nama; ?>"
                        placeholder="Lastname"
                        class="form-control"
                        id="exampleInputPassword1"
                        required
                      />
                      <input
                        type="hidden"
                        name="harga"
                        value="<?php echo ($harga+150000); ?>"
                        placeholder="Lastname"
                        class="form-control"
                        id="exampleInputPassword1"
                        required
                      />
                      <input
                        type="hidden"
                        name="id"
                        value="<?php echo $id; ?>"
                        placeholder="Lastname"
                        class="form-control"
                        id="exampleInputPassword1"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="exampleInputPassword1" class="form-label"
                      >Username</label
                    >
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"
                        ><i class="bi bi-person-plus-fill"></i
                      ></span>
                      <input
                        type="text"
                        name="username"
                        class="form-control"
                        placeholder="Username"
                        aria-label="Username"
                        aria-describedby="basic-addon1"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="exampleInputPassword1" class="form-label"
                      >Email</label
                    >
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"
                        ><i class="bi bi-envelope-fill"></i
                      ></span>
                      <input
                        type="email"
                        name="email"
                        class="form-control"
                        placeholder="Email"
                        aria-label="Email"
                        aria-describedby="basic-addon1"
                        required
                      />
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label for="exampleInputPassword1" class="form-label"
                      >Phone number</label
                    >
                    <div class="input-group mb-3">
                      <span class="input-group-text" id="basic-addon1"
                        ><i class="bi bi-telephone-fill"></i
                      ></span>
                      <input
                        type="number"
                        name="no_hp"
                        class="form-control"
                        placeholder="Phone number"
                        required
                      />
                    </div>
                  </div>
                </div>
        </div>
      </div>
    </div>

    <!-- Finish Personal Form-->

    <!-- Address -->
    <section id="Address">
      <div class="container mt-4">
        <div class="card shadow">
          <div class="card-header text-danger">
            <i class="bi bi-geo-alt-fill text-danger"></i>
            <b class="ms-2">Shipping address</b>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm-2 col-md-2 mt-2">
                <h5><b>Alamat</b></h5>
              </div>
              <div class="col-sm-7 col-md-10">
                  <input type="text" name="alamat"  class="form-control" required>
              </div>
              <!-- <div class="col-md-2 text-center mt-3">
                <a
                  class="text-primary fw-5"
                  href="#exampleModal1"
                  data-toggle="modal"
                  data-target="#exampleModal1"
                  >CHANGE</a
                >
              </div> -->
            </div>
          </div>

          <!-- Modal Change Address-->
          <!-- <div
            class="modal fade"
            id="exampleModal1"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel1"
            aria-hidden="true"
          >
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title text-danger" id="exampleModalLabel1">
                    <i class="bi bi-geo-alt-fill text-danger"></i> Choose your
                    Location
                  </h5>
                  <button
                    type="button"
                    class="btn-close"
                    data-dismiss="modal"
                    aria-label="Close"
                  ></button>
                </div>
                <div class="modal-body">
                  <form>
                    <div class="form-group text-muted">
                      <label for="message-text" class="col-form-label"
                        >Your Address</label
                      >
                      <textarea
                        class="textarea form-control"
                        id="message-text"
                      ></textarea>
                    </div>
                    <div class="form-group text-muted">
                      <label for="recipient-name" class="col-form-label"
                        >Add link google map :
                      </label>
                      <input
                        type="text"
                        class="form-control"
                        id="recipient-name"
                      />
                    </div>
                  </form>
                </div>
                <div class="modal-footer">
                  <button
                    type="button"
                    class="btn btn-light"
                    data-dismiss="modal"
                  >
                    Close
                  </button>
                  <button type="button"  class="btn btn-dark">
                    Save changes
                  </button>
                </div>
              </div>
            </div>
          </div> -->
          <!-- Finish Modal Change Address -->

          <div class="container">
            <div class="row">
              <p class="text-muted">Your Location :</p>
            </div>
            <div class="row">
              <div class="embed-responsive embed-responsive21by9">
                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.299557896162!2d109.17164661428768!3d-6.97394099496182!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fbf692b8bfacf%3A0xd1cb625cb6ba4214!2sJl.%20Wungu%203%2C%20Wlungu%2C%20Pangkah%2C%20Kec.%20Pangkah%2C%20Tegal%2C%20Jawa%20Tengah%2052471!5e0!3m2!1sid!2sid!4v1635696027227!5m2!1sid!2sid"
                  width="100%"
                  height="300"
                  style="border: 0"
                  allowfullscreen=""
                  loading="lazy"
                ></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Finish Address -->

    <!-- Product -->
    <section id="Address">
      <div class="container">
        <div class="card mt-4 shadow">
          <div class="card-header text-dark">
            <i class="bi bi-cart-check-fill text-success"></i>
            <b class="ms-2 text-success">Product Ordered </b>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-5 col-md-5">
                <p><i class="bi bi-bag-check-fill"></i> <b>Pendo</b>store</p>
              </div>
              <div class="row">
                <div class="col-md-1 col-md-1">
                  <div class="form-check">
                    <input
                      class="form-check-input"
                      type="checkbox"
                      value=""
                      id="flexCheckChecked"
                      checked
                    />
                    <label class="form-check-label" for="flexCheckChecked">
                      <img
                        src="product_images/<?= $nama_gambar; ?>"
                        width="32px"
                        alt=""
                      />
                    </label>
                  </div>
                </div>
                <div class="col-sm-4 col-md-4">
                  <p class="mt-1"><?php echo $nama; ?></p>
                </div>
                <div class="col-sm-3 col-md-2 text-muted">
                  <p class="mt-1">Amount :</p>
                </div>
                <div class="col-sm-3 col-md-2 text-muted">
                  <div class="select row">
                    <div
                      class="btn-group"
                      role="group"
                      aria-label="Basic outlined example"
                    >
                      <button
                        type="button"
                        class="btn btn-outline-light text-muted"
                      >
                        -
                      </button>
                      <button
                        type="button"
                        class="btn btn-outline-light text-muted"
                      >
                        1
                      </button>
                      <button
                        type="button"
                        class="btn btn-outline-light text-muted"
                      >
                        +
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3 col-md-2 text-muted">
                  <p class="mt-1">Price :</p>
                </div>
                <div class="col-sm-2 col-md-1 text-muted">
                  <p class="mt-1"><b><?php echo 'Rp. '.$harga; ?></b></p>
                </div>
              </div>
            </div>

            <div class="container">
              <div class="pesan row mt-3">
                <div class="col-md-5 col-md-5 mt-4">
                  <div class="row g-3 align-items-center">
                    <div class="col-auto">
                      <label for="inputPassword6" class="col-form-label"
                        >Order:</label
                      >
                    </div>
                    <div class="col-auto">
                      <input
                        class="form-control"
                        aria-describedby="passwordHelpInline"
                        placeholder="Leave a message to the seller"
                      />
                    </div>
                  </div>
                </div>
                <div class="col-md-2 col-md-2 mt-4">
                  <p class="text-success">Shipping options :</p>
                </div>
                <div class="col-md-3 col-md-3 mt-4">
                  <p><b>Reguler</b></p>
                  <p class="text-muted">Will be accepted on 4 november</p>
                </div>
                <div class="col-md-2 col-md-2 text-center mt-4">
                  <a
                    class="text-primary fw-5"
                    href="#exampleModal-3"
                    data-toggle="modal"
                    data-target="#exampleModal-3"
                    >CHANGE</a
                  >
                </div>
              </div>

              <!-- Modal Jasa -->
              <div
                class="modal fade"
                id="exampleModal-3"
                tabindex="-1"
                aria-labelledby="exampleModalLabel-3"
                aria-hidden="true"
              >
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel-3 ">
                        <i class="bi bi-truck text-success"></i> Select shipping
                        option
                      </h5>
                      <button
                        type="button"
                        class="btn btn-close"
                        data-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>

                    <div class="modal-body">
                      <div class="card">
                        <div class="card-header text-muted">
                          <div class="row">
                            <div class="col-12">
                              <b>Pendostore Supported Delivery</b>
                            </div>
                            <div class="col-12">
                              You can track orders using Pendostore Supported
                              Shipping
                            </div>
                          </div>
                        </div>
                        <div class="card-body">
                          <div class="row">
                            <div class="col-4">
                              <p><b>Reguler</b></p>
                            </div>
                            <div class="col-sm-8">
                              <p class="text-success"><b>50000</b></p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12 text-muted mb-3">
                              Will be accepted on October 4th <br />
                              COD (pay on site) is not supported
                            </div>
                            <hr />
                          </div>

                          <div class="row">
                            <div class="col-12">
                              <p>Choose delivery time</p>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-12">
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="exampleRadios"
                                  id="exampleRadios1"
                                  value="option1"
                                  checked
                                />
                                <label
                                  class="form-check-label"
                                  for="exampleRadios1"
                                >
                                  delivery any time <br />
                                  <p class="text-muted">
                                    recommended for home address
                                  </p>
                                </label>
                              </div>
                              <div class="form-check">
                                <input
                                  class="form-check-input"
                                  type="radio"
                                  name="exampleRadios"
                                  id="exampleRadios2"
                                  value="option2"
                                />
                                <label
                                  class="form-check-label"
                                  for="exampleRadios2"
                                >
                                  delivery during office hours <br />
                                  <p class="text-muted">
                                    recommended for office address
                                  </p>
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="modal-footer">
                      <button
                        type="button"
                        class="btn btn-light"
                        data-dismiss="modal"
                      >
                        Close
                      </button>
                      <button type="button" class="btn btn-dark">
                        Save changes
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Finish Modal jasa -->

              <div class="pesan row">
                <div class="col-md-12 col-md-12"></div>
                <p class="text-muted text-end">
                  Total Order (1 Product): <b class="ms-3 h3"><?php echo 'Rp. '.($harga+50000); ?></b>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Finish Product -->

    <!-- Payment -->
    <div class="container mt-4">
      <div class="card shadow">
        <div class="card-header">
          <i class="bi bi-credit-card-2-back-fill text-warning"></i>
          <b class="ms-2 text-warning">Payment Method</b>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-md-12">
              <p>Choose your payment method :</p>
              <a type="button" class="btn btn-outline-danger btn-sm mt-2">
                <img
                  src="https://www.smkpim.sch.id/wp-content/uploads/2020/10/90188de057b8410c7e3339538d837d19.png"
                  width="80px"
                  height="30px"
                  alt="Indomart"
                />
              </a>

              <a
                href="#"
                type="button"
                class="btn btn-outline-danger btn-sm mt-2"
              >
                <img
                  src="data:image/png;base64,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"
                  width="80px"
                  height="30px"
                  alt="Alfamart"
                />
              </a>
              <a
                href="#"
                type="button"
                class="btn btn-outline-primary btn-sm mt-2"
              >
                <img
                  src=" https://image.cermati.com/q_70/v1431504749/ogxuwgtitfwxavibahws.jpg"
                  width="80px"
                  height="30px"
                  alt="Visa"
                />
              </a>
              <a
                href="#"
                type="button"
                class="btn btn-outline-primary btn-sm mt-2"
              >
                <img
                  class="ms-2"
                  src="https://cdn.pixabay.com/photo/2015/05/26/09/37/paypal-784404_960_720.png"
                  width="80px"
                  height="30px"
                  alt="Paypal"
                />
              </a>
              <a
                href="#"
                type="button"
                class="btn btn-outline-primary btn-sm mt-2"
              >
                <img
                  src="https://logos-download.com/wp-content/uploads/2016/06/Bank_Mandiri_logo_white_bg.png"
                  width="80px"
                  height="30px"
                  alt="Mandiri"
                />
              </a>
              <a
                href="#"
                type="button"
                class="btn btn-outline-primary btn-sm mt-2"
              >
                <img
                  src="https://img.beritasatu.com/cache/beritasatu/910x580-2/1416381779.jpg"
                  width="80px"
                  height="30px"
                  alt="BCA"
                />
              </a>
              <a
                href="#"
                type="button"
                class="btn btn-outline-primary btn-sm mt-2"
              >
                <img
                  src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/68/BANK_BRI_logo.svg/2560px-BANK_BRI_logo.svg.png"
                  width="80px"
                  height="30px"
                  alt="BRI"
                />
              </a>
              <hr />
            </div>
          </div>
          <div class="row text-muted justify-content-end">
            <div class="col-md-3 text-end">Subtotal for Products</div>
            <div class="col-md-2 text-end"><?php echo 'Rp. '.$harga; ?></div>
          </div>
          <div class="row text-muted justify-content-end">
            <div class="col-md-3 text-end">Total Shipping Cost</div>
            <div class="col-md-2 text-end"><?php echo 'Rp. 100000'; ?></div>
          </div>
          <div class="row text-muted justify-content-end">
            <div class="col-md-3 text-end">Handling Fee</div>
            <div class="col-md-2 text-end"><?php echo 'Rp. 50000'; ?></div>
          </div>
          <div class="row text-muted justify-content-end mt-2">
            <div class="col-md-3 text-end">Total Payment</div>
            <div class="col-md-2 text-end"><b class="h5"><?php echo 'Rp. '.($harga+150000); ?></b></div>
          </div>
        </div>
      </div>
    </div>
    <!-- Finish Payment -->

    <div class="row justify-content-center mt-3">
      <div class="col-12 col-sm-5 col-md-5">
        <?php
          if(!empty($_SESSION['message'])){
            echo $_SESSION['message'];
            $_SESSION['message'] = null;
          }
        ?>
      </div>
    </div>

    <!-- Button Pay Now -->
    <div class="container">
      <div class="d-grid gap-2">
        <!-- Button trigger modal -->
              <input
              type="submit"
              class="btn btn-dark"
              name="submit"
              value="Pay Now">  
          </input>
      </div>
    </div>

    
    <!--Finish Button Pay Now -->

    <!-- Modal
    <div
      class="modal fade"
      id="exampleModal-2"
      tabindex="-1"
      aria-labelledby="exampleModalLabel-2"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel-2">
              Payment Success
              <i class="bi bi-check-square-fill text-success ms-2"></i>
            </h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>

          <div class="modal-body text-end">
            <div class="row">
              <div class="col-md-5 mt-5 col-5 col-sm-5">
                <p>
                  Congrats Faizal Falakh,your Payment is successful, order will
                  be sent soon
                  <i class="bi bi-emoji-wink ms-2 text-success"></i>
                </p>
              </div>
              <div class="col-md-7 col-5">
                <img
                  src="./undraw_Successful_purchase_re_mpig.png"
                  width="270px"
                  alt=""
                />
              </div>
            </div>
          </div>

          <div class="modal-footer">
            <div class="container">
              <div class="d-grid gap-2">
               
                <button
                  type="button"
                  class="btn btn-success"
                  data-bs-toggle="modal"
                  data-bs-target="#exampleModal-2"
                >
                  Close
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Finish Modal -->

    </form>

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
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
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
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>
