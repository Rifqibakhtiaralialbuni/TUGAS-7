<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
</head>
<body>
    <h1>Selamat Datang <?php echo $username; ?></h1>
    <h2>Aplikasi Perpustakaan FTIK USM</h2>
    <b>Menu</b>
    <ol>
        <li><a href="<?=base_url('index.php/buku');?>">Kelola Data Buku</a></li>
        <li><a href="<?=base_url('index.php/anggota');?>">Kelola Data Anggota</a></li>
        <li><a href="<?=base_url('index.php/pinjam');?>">Kelola Transaksi Pinjam</a></li>
    </ol>
    <a href="<?=base_url('index.php/perpus/logout'); ?>">LogOut</a>
</body>
</html>