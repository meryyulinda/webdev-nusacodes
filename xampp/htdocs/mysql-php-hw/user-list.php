<?php include 'db-connect.php'?>

<!DOCTYPE html>

<html>
    <head>
        <title>Daftar Pengguna</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Table bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
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
                <a class="nav-link" href="index.php">Registrasi</a>
                </li>
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="user-list.php">Daftar Pengguna</a>
                </li>
            </ul>
            </div>
        </div>
        </nav>




        <div class="container">
            <h2 style='text-align: center; padding-top:10px; padding-bottom: 10px;'>Daftar Pengguna saat ini</h2>      
            <table class="table table-hover">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Usia</th>
                    <th>Email</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <?php
                        $query = "SELECT * FROM `user_regist`";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['alamat']."</td>
                            <td>".$row['usia']." tahun</td>
                            <td>".$row['email']."</td>
                            <td>
                                <a href='edit-page.php?id=".$row['id']."'><button type='button' class='btn btn-outline-primary'>Edit</button></a>
                                <button onclick='deleteRecord(".$row['id'].")' type='button' class='btn btn-outline-danger'>Hapus</button>
                            </td>
                        </tr>
                        ";
                        }
                    ?>
                </tr>
                </tbody>
            </table>
        </div>


        
    </body>

    <script>
        function deleteRecord(id){
            var confirmation = confirm('Yakin menghapus data ini?');
            if (confirmation){
                window.location.replace('delete.php?id='+id);
            }
            else{
                // alert("Batal menghapus data");
            }
        }
    </script>
</html>