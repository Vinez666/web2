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