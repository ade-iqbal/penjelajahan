<?php
require 'functions.php';

    if ( isset($_POST['masuk'])) {
        $username=$_POST["user"];
        $password=$_POST["pass"];
        $periksa = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username'");
        
        if (mysqli_num_rows($periksa) === 1) {
            $row = mysqli_fetch_assoc($periksa);
            if ( $password == $row["password"]) {
                header("Location: daftarbarang.php");
                exit;
            }
        }
        
        echo "<script>
                alert('username dan password yang anda masukkan salah') 
              </script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        .enter {
            margin-left: 41%;
            margin-right: 41%;
            margin-top: 30px;
            width: 200px;
            height: 200px;
            padding: 20px;
            box-shadow: 10px 10px 10px grey;
            border-radius: 40px;
            background-image: linear-gradient(-45deg, white, whitesmoke, lightgrey);
            transition: 0.3s;
        }
        
        .enter:hover {
            margin-left: 40.8%;
            margin-top: 28px;
            box-shadow: 10px 10px 1px 2px grey;
        }
        
        h1 {
            text-align: center;
            font-variant: small-caps;
            text-shadow: 2px 2px black;
            color: grey;
            font-size: 40px;
            margin-top: 45px;
        }

        a{
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-style: italic;
            margin-left: 70px;
        }

        button{
            margin-left: 40px;
            margin-top: 3px;
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
        <h1>Login</h1>
    </div>

    <div class="enter">
        <form action="" method="post">
            <tr>
                <label for="user">Username</label>
                <input type="text" name="user" id="user">
            </tr> <br>
            <tr>
                <label for="pass">Password</label>
                <input type="password" name="pass" id="pass">
            </tr> <br>
            <a href="register.php">Daftar</a> <br>
            <tr>
                <button type="submit" name="masuk">Login</button>
            </tr>
        </form>
    </div>
</body>

</html>
