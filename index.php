<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "LEMBAGA SEKOLAH ASWAJA CENTER";

$koneksi = mysqli_connect($host, $user, $pass, $db);
if (!$koneksi) {
  die("Tidak bisa terkoneksi ke database");
}
$id = "";
$muallim = "";
$staf = "";
$guru_piket = "";

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
      .mx-auto { width:800px }
      .card { margin-top:10px }
    </style>


  </head>
  <body>
    <div class="mx-auto">
      <!-- untuk memasukkan data -->
    <div class="card">
      <div class="card-header">
        create/edit data
      </div>
        <div class="card-body">
         <form action="" method="POST">
         <div class="mb-3 row">
            <label for="id" class="form-label">ID</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="id" name="id" value="<?php echo $ID ?>">
            </div>
         </div>
         <div class="mb-3 row">
            <label for="muallim" class="form-label">Muallim</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="muallim" name="muallim" value="<?php echo $Nama ?>">
            </div>
         </div>
         <div class="mb-3 row">
            <label for="staf" class="form-label">Staf</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="staf" name="staf" value="<?php echo $Alamat ?>">
            </div>
         </div>
         <div class="mb-3 row">
            <label for="guru_piket" class="form-label">Guru Piket</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="guru_piket" name="guru_piket" value="<?php echo $Alamat ?>">
            </div>
         </div>
   
                           <div class="col-12">
                              <input type="sumbit" nama="simpan" value="simpan data" class="btn btn-primary"/>
                           </div>
                           </form>
                         </div>
                      </div>

                       <!-- untuk mengaluarkan data -->
                      <div class="card">
                            <div class="card-header text-white bg-secondary">
                             Data Mahasiswa
                            </div>
                          <div class="card-body">
       
                        </div>
                      </div>
                      </div>
                    </body>
                  </html>
