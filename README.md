# Tugas Pemograman Web2
Praktikum 2 <br>
Kevin Suyadi Ritonga<br>
TI.21.A3<br>
312110081<br>

# Code Php Dasar 1
```
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Dasar</title>
</head>
<body>
<h1>Belajar PHP Dasar</h1>
<?php
echo "Hello World";
?>
<br>
<h2>Menggunakan Variable</h2>
<?php
$nim = "312110081";
$nama = 'Kevin Suyadi Ritonga';
echo "NIM : " . $nim . "<br>";
echo "Nama : $nama";
?>
</body>
</html>
```
# Output
![phpdasar1](https://user-images.githubusercontent.com/127708664/226526272-25f8780d-057a-48d2-9a59-4667f958a5ef.png)

# Code Php Dasar 2
```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>
  <!-- Variabel $_GET -->
  <h2><b>Predefine Variable</b></h2>
  <?php
  $nama = 'Kevin';
  echo 'Selamat Datang ' . $_GET['nama']
  ?>
</body>
</html>
```
# Output
![phpdasar2](https://user-images.githubusercontent.com/127708664/226526501-0866b1f3-c28c-40fb-becc-c95702a21b94.png)

# Code Php Dasar 3
```
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>

<body>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama: </label>
        <input type="text" name="nama">
        <input type="submit" value="Kirim">
    </form>
    <?php
    $nama = 'Kevin';
    echo 'Selamat Datang ' . $_POST['nama'];
    ?>
</body>

</html>
```
# Output
![phpdasar3](https://user-images.githubusercontent.com/127708664/226674810-7d8b05d5-ef86-4216-8e9a-2be4e2614a5d.png)

# Code Php Dasar 4
```
<! html DOCTYPE>
<html lang="en">

<Head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Basic ></title>
</Head>

<body>
  <?php
  $gaji = 1000000;
  $pajak = 0.1;
  $THP = $pajak - ($gaji *  $pajak);
  Echo "Gaji sebelum pajak = Rp.  $gaji <br>";
  Echo "Gaji yang dibawa pulang = Rp.  $THP";
  ?>
</body>

</html>
```

# Output
![phpdasar4](https://user-images.githubusercontent.com/127708664/226675148-9e201610-b436-447b-907a-3e312ae9ef0c.png)

# Code Php Dasar 5
```
<! html DOCTYPE>
<html lang="en">

<Head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <Basic ></title>
</Head>

<body>
  <h2>Kondisi If</h2>
  <?php
  $nama_hari = date("l");
  if ($nama_hari == "Minggu") {
    Echo "Sunday";
  } elseif ($nama_hari == "Senin") {
    Echo "Monday";
  } else {
    Echo "Selasa";
  }
  ?>
</body>
```
# Output
![phpdasar5](https://user-images.githubusercontent.com/127708664/226675497-2a53752c-ca92-4c42-8744-76fc248775ff.png)

# Code Php Dasar 6
```
<h2>Kondisi Switch</h2>
<?php
$nama_hari = date("l");
Switch ($nama_hari) {
  case "Minggu":
    Echo "Sunday";
    Break;
  case "Senin":
    Echo "Monday";
    Break;
  case "Selasa":
    Echo "Tuesday";
    Break;
  Default:
    Echo "Selasa";
}
Echo "/$nama_hari";
?>
```
# Output
![phpdasar6](https://user-images.githubusercontent.com/127708664/226675772-9c7570b5-81be-4ed1-86da-3e7c0898dc05.png)

# Code Php Dasar 7
```
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Dasar</title>
</head>

<body>
  <h2>Perulangan For</h2>
  <?php
  echo "Perulangan 90 sampai 100 <br />";
  for ($i = 1; $i <= 10; $i++) {
    echo "Perulangan ke: " . $i . '<br />';
  }
  echo "Perulangan Menurun dari 100 ke 90 <br />";
  for ($i = 10; $i >= 1; $i--) {
    echo "Perulangan ke: " . $i . '<br />';
  }
  ?>
</body>

</html>
```

# Output
![phpdasar7](https://user-images.githubusercontent.com/127708664/226676055-12cdfe83-45f8-440c-95a9-9ea3d262e50d.png)

# Code Php Dasar 8
```
<h2>Perulangan While</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i = 1;
while ($i <= 10) {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
}
?>
```

# Output
![phpdasar8](https://user-images.githubusercontent.com/127708664/226676361-949b3d57-761a-49e4-a815-6b519f62fee6.png)

# Code Php Dasar 9
```
<h2>Perulangan Do while</h2>
<?php
echo "Perulangan 1 sampai 10 <br />";
$i = 1;
do {
  echo "Perulangan ke: " . $i . '<br />';
  $i++;
} while ($i <= 10);
?>
```
# Output
![phpdasar9](https://user-images.githubusercontent.com/127708664/226676615-73daaca6-d636-4455-9d56-1af407193ed6.png)
