<?php 
    include 'db-connect.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM karyawan WHERE id='$id'";
    $execute_query = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($execute_query); 

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Data Karyawan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Table bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
        <!--Form bootstrap-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
                <h2 style='text-align: center; padding-top:10px; padding-bottom: 10px;'>Form Registrasi Karyawan</h2>
                <form class="form-horizontal" action="update.php" method='post'>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="nama">Nama:</label>
                        <div class="col-sm-10">
                            <input type="hidden" class="form-control" id="id" name="id" value="<?php echo $result['id']?>">
                            <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $result['nama']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="alamat">Alamat:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $result['alamat']?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="usia">Usia:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="usia" name="usia" value="<?php echo $result['usia']?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="kota">Kota:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="kota" name="kota" value="<?php echo $result['kota']?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" style='margin-top: -5px;' for="jenis-kelamin">Jenis Kelamin:</label>
                        <div class="col-sm-10">          
                            <select name="jenis-kelamin" id="jenis-kelamin">
                                    <option value="" <?php if($result['jenis_kelamin'] == ""){echo 'selected';}?>>--- Pilih jenis kelamin ---</option>
                                    <option value="Laki-laki" <?php if($result['jenis_kelamin'] == "Laki-laki"){echo 'selected';}?>>Laki-laki</option>
                                    <option value="Perempuan" <?php if($result['jenis_kelamin'] == "Perempuan"){echo 'selected';}?>>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">        
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-primary" name='clicked-button' value='simpan'>Simpan Perubahan</button>
                            <button type="submit" class="btn btn-link" name='clicked-button' value='batal'>Batal</button>
                        </div>
                    </div>
                </form>
                
        </div>


        <div class="container" style='margin-top:60px;'>
            <h3>Daftar Karyawan saat ini</h3>      
            <table class="table table-hover">

                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Usia</th>
                    <th>Kota</th>
                    <th>Jenis Kelamin</th>
                </tr>
                </thead>

                <tbody>
                <tr>
                    <?php
                        $query = "SELECT * FROM karyawan";
                        $result = mysqli_query($conn, $query);
                        while($row = mysqli_fetch_assoc($result)){
                        echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['alamat']."</td>
                            <td>".$row['usia']." tahun</td>
                            <td>".$row['kota']."</td>
                            <td>".$row['jenis_kelamin']."</td>
                            <td>
                                <a href='edit-page.php?id=".$row['id']."'><button type='button' class='btn btn-outline-primary'>Ubah</button></a>
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

        function backToHome(){
            window.location.replace('index.php');
        }
    </script>
</html>