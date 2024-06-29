<?php 
    include 'db-connect.php';

    $id = $_GET['id'];
    $query = "SELECT * FROM user_regist WHERE id='$id'";
    $execute_query = mysqli_query($conn, $query);

    $result = mysqli_fetch_assoc($execute_query); 

?>

<!DOCTYPE html>

<html>
    <head>
        <title>Edit Data Pengguna</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--Custom CSS-->
        <link rel="stylesheet" href="style.css">
        <!--Table bootstrap-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <!--Form bootstrap-->
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>

    <body>

        <div class="container">
                <h2 style='text-align: center; padding-top:10px; padding-bottom: 10px;'>Edit Data Pengguna</h2>
                <form class="form-horizontal" action="update.php" method='post'>
                    <div class="form-group">
                        <label class="control-label col-sm-2 required" for="nama">Nama:</label>
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
                        <label class="control-label col-sm-2 required" for="usia">Usia:</label>
                        <div class="col-sm-10">          
                            <input type="number" class="form-control" id="usia" name="usia" value="<?php echo $result['usia']?>" >
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2 required" for="kota">Email:</label>
                        <div class="col-sm-10">          
                            <input type="text" class="form-control" id="email" name="email" value="<?php echo $result['email']?>" >
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



        
    </body>

</html>