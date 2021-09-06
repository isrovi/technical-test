<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">Pinjam Buku</h1>
                    <p class="lead fw-normal text-white-50 mb-0">buku lengkap</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="pb-5">
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                        Tambah
                    </button>
                </div>
                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Tambah Buku</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="./create.php?act=tambahuser" method="post" role="form">
                                <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label text-right">id <span class="text-red">*</span></label>         
                                <div class="col-sm-8"><input type="text" class="form-control" name="id" placeholder="id " value=""></div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label text-right">Judul <span class="text-red">*</span></label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="nama" placeholder="nama" value=""></div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label text-right">Stok <span class="text-red">*</span></label>
                                <div class="col-sm-8"><input type="text" class="form-control" name="stok" placeholder="stok" value="">
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label text-right">Gambar <span class="text-red">*</span></label>
                                <div class="col-sm-8"><input type="upload" class="btn btn-secondary" value="Upload">
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label text-right">Deskripsi <span class="text-red">*</span></label>
                                <div class="col-sm-8"><textarea name="" id="" cols="30" rows="10"></textarea>
                                </div>
                                </div>
                                </div>
                                <div class="form-group">
                                <div class="row">
                                <label class="col-sm-3 control-label text-right">Kategori <span class="text-red">*</span></label>
                                    <div class="col-sm-8"><select name="role" class="form-control select2" style="width: 100%;">
                                    <option value="kategori" selected="selected">-- Pilih Satu --</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    </select>
                                    </div>
                                </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                        </div>
                        <form action="index.php?act=tambahbuku" method="post" role="form">
                        </div>
                    </div>
                </div>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                    <?php
                            include 'connection.php';
                            $result = $db->query("SELECT * FROM books ORDER BY id ASC"); 
                             if($result->num_rows > 0) 
                             while($row = $result->fetch_assoc()){ ?> 
                        <table class="justify-content-left">
                            <tr>
                                <td>
                                    <div class="card h-100">
                                        <!-- Product image-->
                                        <img class="card-img-top" src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($row['image']); ?>" alt="..." />
                                        
                                        <!-- Product details-->
                                        <div class="card-body p-4">
                                            <div class="text-center">
                                                <!-- Product name-->
                                                <h5 class="fw-bolder"><?php echo $row['name'] ?></h5>
                                                <!-- Product price-->
                                                Stok <?php echo($row['stok']) ?>
                                            </div>
                                        </div>
                                        <!-- Product actions-->
                                        <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                            <div class="text-center">
                                                <input name="pinjam" type="button" class="btn btn-primary" value="Pinjam">
                                                <button name="kembali" type="button" class="btn btn-warning" value="kembali" onS>Kembalikan</button>
                                                <?php 
                                                    if(isset($_POST['pinjam'])) {
                                            
                                                        $query = "UPDATE books
                                                              SET stok = stok - 1
                                                              WHERE id = 1"; // You can use ID to identify the 
                                                        
                                                        $run_query = mysql_query($query);
                                                    
                                                        
                                                     }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                <td>
                            </tr>
                        </table>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
