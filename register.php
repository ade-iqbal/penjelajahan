<?php 
    require 'functions.php';
    
    if (isset($_POST['daftar'])) {
        $username=$_POST['username'];
        $password=$_POST['password'];
        $konfirm=$_POST['konfirm'];

        $cek = mysqli_query($conn, "SELECT username FROM register WHERE username = '$username'");

        if ( mysqli_fetch_assoc($cek) ) {
            echo "<script>
                    ('Username sudah ada')
                    </script>";  
            return false;
        } 

        if ( $password !== $konfirm) { 
            echo "<script> 
                alert('Password yang anda masukkan salah')
                document.location.href = 'register.php' 
                </script>"; 
            return false;
        }

        $query=mysqli_query($conn, "INSERT INTO register VALUES('','$username','$password')");

        if ( mysqli_affected_rows($conn) > 0) {
            echo "<script>
                alert('Akun berhasil ditambahkan')
                </script>"; 
            }
            else {
            echo "<script>
                alert('Akun gagal ditambahkan')
                </script>";
            }

        }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrasi</title>
    <style>
        .regis {
            margin-left: 41%;
            margin-right: 41%;
            margin-top: 30pxpx;
            width: 200px;
            height: 200px;
            padding: 20px;
            box-shadow: 10px 10px 10px grey;
            border-radius: 10px;
            background-image: linear-gradient(-45deg, white, whitesmoke, lightgrey);
        }
        
        h1 {
            text-align: center;
            font-variant: small-caps;
            text-shadow: 2px 2px black;
            color: grey;
            font-size: 40px;
            margin-top: 45px;
        }

        button{
            margin-left: 40px;
            margin-top: 5px;
            background-color: grey;
            margin-right: 20px;
            color: white;
            box-shadow: 2px 2px black;
            border-radius: 20px;
            height: 30px;
            width: 100px;
        }

    </style>
</head>

<body>
    <div>

        <h1>Registrasi</h1>
    </div>

    <div class="regis">
        <form action="" method="post">
            <tr>
                <label for="username">Username</label>
                <input type="text" name="username" id="username">
            </tr> <br>
            <tr>
                <label for="password">Password</label>
                <input type="password" name="password" id="password">
            </tr> <br>
            <tr>
                <label for="konfirm">Konfirmasi Password</label>
                <input type="password" name="konfirm" id="konfirm">
            </tr> <br>
            <tr>
                <button type="submit" name="daftar">Daftar</button>
            </tr>
        </form>
    </div>
</body>

</html>