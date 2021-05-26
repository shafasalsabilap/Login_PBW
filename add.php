<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <style>
        body{
            font-family: 'Poppins', sans-serif;
            background-color:#F9EBEA;
        }
        .mx-auto{ 
            width: 45%
            
        }
        .card{ 
            margin-top: 10px; 
        }
        
        
    </style>
  <title>Shafa Salsabila 4519210070</title>
</head>
<body>
    <div class="mx-auto">
        <div class="card">
            <div class="card-header">
                <h1>Tambah Data Mahasiswa</h1>
            </div>          
                <form action="add.php" method="post" name="form1">
                <table cellpadding="10">
                    <tr>
                        <td>NPM </td>
                        <td><input class="form-control" type="text" name="NPM"></td>
                    </tr>
                    <tr> 
                        <td>Nama</td>
                        <td><input class="form-control" type="text" name="Nama"></td>
                    </tr>
                    <tr> 
                        <td>Email</td>
                        <td><input class="form-control" type="text" name="Email"></td>
                    </tr>
                    <tr> 
                        <td>Username</td>
                        <td><input class="form-control" type="text" name="Username"></td>
                    </tr>
                    <tr> 
                        <td>Password</td>
                        <td><input type="text" class="form-control" name="Pass"></td>
                    </tr>                      
                    </table>
                    <hr>
                    <div class="btn-group p-2" role="group" aria-label="Basic checkbox toggle button group">
                    <input type="submit" name="Submit" value="Add" class="btn-check" id="btncheck1" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck1"><u>Submit</u></label>

                    <input  type="button" value="Batal" class="btn-check" id="btncheck2" autocomplete="off">
                    <label class="btn btn-outline-primary" for="btncheck2"><a href="index.php">Home</a></label>
                    </div>
                </form>
        </div>
    </div>
    
	<?php
    include ('config.php');
    session_start();
	if(isset($_POST['Submit'])) {
		$NPM = $_POST['NPM'];
		$Nama = $_POST['Nama'];
		$Email = $_POST['Email'];
        $Username = $_POST['Username'];

        $cekuser = "SELECT Username FROM mahasiswa WHERE Username = '$Username' ";
        $hasiluser = mysqli_query($mysqli,$cekuser);

        if (mysqli_num_rows($hasiluser)>0) {
            echo "<script>alert('Data Gagal disimpan, Username sudah terdaftar!'); window.location=('add.php');</script>";
            exit;
            
        } else {
            $Pass= md5($_POST['Pass']);
            
            
            $result = "INSERT INTO mahasiswa (NPM, Nama, Email, Username, Pass) VALUE ('$NPM', '$Nama', '$Email', '$Username', '$Pass')";
            $hasil=mysqli_query($mysqli,$result);

            if ($hasil) {
                echo "<script>alert('Data Berhasil ditambah'); window.location=('index.php');</script>"; 
                exit;
            }
            else {
                echo "<script>alert('Data Gagal disimpan'); window.location=('add.php');</script>";
                exit;
            }  
        }
    }
	?>
</body>
</html>