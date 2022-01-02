<?php
    include('connection.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>

    
    <title>Register</title>
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
                    <img src="./register.png" class="vh-100" alt="" width="100%" height="100%">
                </div> 
                <div class="col-md-6 col-sm-6 col-12">
                       <div class="row ms-3 me-3">
                           <h2><b>Pendo</b>store</h2>
                           <p class="mt-3">No.1 online shop in Indonesia </p>
                            <form class="form-signin" action="register_proses.php" method="POST">
                                 <div class="row mt-3">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="text" id="username" class="form-control" name="username" placeholder="Username" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="text" id="nama" class="form-control" name="nama"placeholder="Name" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                        <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-laki">
                                                Man
                                            <input class="form-check-input ms-4" type="radio" name="jk" id="jk2" value="Perempuan">
                                                Woman
                                            <input class="form-check-input ms-4" type="radio" name="jk" id="jk3" value="Lainnya">
                                                Other
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="email" id="email" class="form-control" name="email" placeholder="Email" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="date" id="tgl_lahir" class="form-control" name="tgl_lahir" placeholder="Date Of Birth" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="text" id="no_hp" class="form-control" name="no_hp" placeholder="Phone number" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="text" id="alamat" class="form-control" name="alamat" placeholder="Address" required>
                                        </div>
                                    </div>
                                </div>   
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <div class="mb-3">
                                            <input type="password" id="inputPassword" class="form-control" name="password" placeholder="Password" required>
                                        </div>
                                    </div>
                                </div>   
                                                               
                                <div class="row">
                                    <div class="col-md-8 col-sm-12 col-12 d-grid gap-2">
                                        <input type="submit" class="btn btn-dark" name="submit" value="Register"/>
                                    </div>
                                </div>
                             </form>
                       </div>
                       
                </div>
            </div>
        </div>
    </section>
    

    <?php  include('js.php');?> 
</body>
</html>