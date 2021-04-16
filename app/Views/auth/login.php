<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->

    <!-- <link rel="stylesheet" href="foundations\bootstrap\scss\login.css">
    <link rel="stylesheet" href="foundations\bootstrap\scss\floating-labels.css">
    <link href="foundations\bootstrap\css\styles.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- ICON -->
    <link rel="stylesheet" type="text/css" href="foundations\adminity\assets\icon\themify-icons\themify-icons.css">
    <link rel="stylesheet" type="text/css" href="foundations\adminity\assets\icon\icofont\css\icofont.css">
    <link rel="stylesheet" type="text/css" href="foundations\adminity\assets\icon\simple-line-icons\css\simple-line-icons.css">
    <link rel="stylesheet" type="text/css" href="foundations\adminity\assets\icon\feather\css\feather.css">
    <link rel="stylesheet" type="text/css" href="foundations\adminity\assets\icon\font-awesome\css\font-awesome.min.css">

    <title>SITU Universitas pasundan</title>
</head>

<body>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row px-3 justify-content-center mt-6 mb-7 border-line">
                            <img src="foundations\adminity\assets\image\logo.png" class="image">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <div class="row">
                                <h2><i class="icofont icofont-dashboard-web"></i> Selamat Datang Di Halaman Login Dosen</h2>
                            </div>
                        </div>
                        <div class="row">
                            <?php if (session()->getFlashData('message')) : ?>
                                <div class="alert alert-danger">Pesan : <?= session()->getFlashData('message') ?></div>
                            <?php endif; ?>
                        </div>
                        <form action="/pmb/login" method="post">
                            <?= csrf_field(); ?>
                            <div class="form-floating mb-3">
                                <label for="floatingInput">Username</label>
                                <input type="text" class="form-control <?= ($validation->hasError('nama')) ? 'is-invalid' : ''; ?>" id="floatingInput" placeholder="Username" name="nama">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('nama'); ?>
                                </div>
                            </div>
                            <div class="form-floating">
                                <label for="floatingPassword">Password</label>
                                <input type="password" class="form-control <?= ($validation->hasError('sandi')) ? "is-invalid" : ""; ?>" id="floatingPassword" placeholder="Password" name="sandi">
                                <div class="invalid-feedback">
                                    <?= $validation->getError('sandi'); ?>
                                </div>
                            </div>
                            <div class="row px-3 mb-4">
                                <div class="custom-control custom-checkbox custom-control-inline">
                                    <input id="chk1" type="checkbox" name="chk" class="custom-control-input"><label for="chk1" class="custom-control-label text-sm">Ingat username</label>
                                </div>
                                <a href="ForgotPassword.php" class="ml-auto mb-0 text-sm">Lupa Password?</a>
                            </div>
                            <div class="row mb-3 px-3">
                                <button type="submit" class="btn btn-outline-primary" role="button"><i class="icofont icofont-login"></i> Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- footer start -->
            <div class="bg-blue py-4">
                <div class="row px-3">
                    <small class="ml-4 ml-sm-5 mb-2 text-center">Copyright &copy; Universitas Pasundan Bandung 2021</small>

                </div>
            </div>
            <!-- footer end -->
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script> -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
</body>

</html>