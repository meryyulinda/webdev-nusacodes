<?php include 'db-connect.php'?>

<!DOCTYPE html>

<html>
    <head>
        <title>Registrasi Pengguna</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Custom CSS-->
        <link rel="stylesheet" href="style.css">
        <!--Form bootstrap-->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <!--Table bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!--Navbar bootstrap-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    </head>

    <body>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark static-top" style='border-radius:0px;'>
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Registrasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="user-list.php">Daftar Pengguna</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>



        <div class="container">
                <h2 style='text-align: center; padding-top:10px; padding-bottom: 10px;'>Form Registrasi Pengguna</h2>
                <form class="form-horizontal" action="create.php" method='post'>
                    <div class="form-group">
                        <label class="control-label col-sm-2 required" for="nama">Nama:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="nama" name="nama" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 required" for="usia">Usia:</label>
                        <div class="col-sm-10">          
                            <input type="number" class="form-control" id="usia" name="usia" placeholder="" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 required" for="email">Email:</label>
                        <div class="col-sm-10">          
                            <input type="email" class="form-control" id="email" name="email" placeholder="" required>
                        </div>
                    </div>
                    

                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-default" style='color:white; background-color:green;'>Submit</button>
                        </div>
                    </div>
                </form>
        </div>



        
    </body>

</html>