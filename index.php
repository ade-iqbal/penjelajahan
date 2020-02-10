<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Selamat Datang</title>
    <style>

    body{
        background-image: url("images/photo-1485470733090-0aae1788d5af.jpg");
        background-repeat:no-repeat;
        
    }

    h1{
        font-size: 4em;
    }

    h2{
        font-size: 2em;
    }

    .header {
        margin-top: 60px;
        text-align: center;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        color: white;
    }    
    
    button {
        font-size: 2.5rem;
        font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        border-radius: 30px;
        margin-top: 50px;
        width: 400px;
        height: 100px;
        background-color: teal;
        color: black;
    }

    </style>

</head>
<body>

<div class="header">
    <h1>Selamat Datang</h1>
    <h2>Toko Jelajah Jaya</h2>
</div>

<center>
<div>

    <form action="admin.php" method="POST">
        <button type="submit" name="admin">Admin</button>
    </form>
    
    <form action="pengunjung.php" method="post">
        <button type="submit" name="pengunjung">Pengunjung</button>
    </form>
</div>
</center>
    
</body>
</html>