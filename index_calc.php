<!DOCTYPE html>
<html>
<head>
 <title>Calculator</title>
 <meta name="viewport" content="initial-scale=1">     
  <meta charset="utf-8">     
  <link href="tampilan.css" rel="stylesheet" type="text/css"> 
</head>

<body>
<?php
  if (isset($_POST['submit'])) {
   $angka1  = $_POST['angka1'];
   $angka2  = $_POST['angka2'];
   $operator  = $_POST['operator'];
   switch ($operator) {
    case 'tambah':
     $hasil = $angka1 + $angka2;
     break;
    case 'kurang':
     $hasil = $angka1 - $angka2;
     break;
    case 'kali':
     $hasil = $angka1 * $angka2;
     break;
    case 'bagi':
     $hasil = $angka1 / $angka2;
     break;
   }
  }
 ?>
 <div class="calc">
  <h2>Kalkulator</h2>
  <form action="index_calc.php" method="post">
   <input type="text" autocomplete="off" name="angka1" placeholder="Enter First Number">
   <input type="text" autocomplete="off" name="angka2" placeholder="Enter Second Number">
   <select name="operator" id="operator">
    <option value="">Options</option>
    <option value="tambah">+</option>
    <option value="kurang">-</option>
    <option value="kali">*</option>
    <option value="bagi">/</option>
   </select>
  <input type="submit" id="submit" name="submit" value="Hasil">
   <div class="hasil">
    Hasilnya yaitu 
    <?php 
     if (isset($_POST['submit']))
      echo $hasil;
    ?>
   </div>
  </form>
 </div>
 
</body>
</html>