<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Login</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color:#F9EBEA;
        }
        .form-group{
            display: grid;
        }
        .card {
            width: 40%;
            margin: auto;
            border: 2px solid #D3BAB9;
            border-radius: 5px;
            padding: 3%;
        }
        .container{
                margin: 10% auto;
            }
        button{
            position: absolute; 
            bottom: 10px;
            right: 16px;
            border: 2px solid #D3BAB9;
            border-radius: 5px;
            background-color: #D3BAB9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="card">
            <h1 style="text-align: center">Silahkan Login</h1>
            <form method="post" action="proses_login.php">
            <div class="form-group">
                <label>Username</label>
                <input type="text" class="form-control" name="Username" placeholder="Masukan Username">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" name="Pass" placeholder="Masukan Password">
            </div>
            <button type="submit" name="submit" value="submit">login</button>
            </form>
        </div>
    </div>
</body>
<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</html>