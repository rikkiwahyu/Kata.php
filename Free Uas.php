<?php
$paragraf = "Nvidia dikabarkan akan mengurangi produksi kartu grafis lamanya untuk bisa meningkatkan volume produksi lini kartu grafis terbarunya, RTX 3000. Dilansir Techspot, Selasa, hal ini diketahui dari postingan di sebuah forum Board Channel, yang merupakan forum tertutup yang berisi distributor dan direksi rekanan pembuat kartu grafis. Dalam sebuah postingan di forum tersebut diketahui kalau Nvidia mengirimkan pemberitahuan pada perusahaan pembuat kartu grafis kalau mereka akan mengurangi pasokan chip RTX 2060 sampai setengahnya mulai bulan Juni ini.";

$kata = explode(" ", $paragraf);
$jumlah_kata = count($kata);
?>
<div style="background: #FDD; color: #222; padding: 5px; margin: 5px; border: 1px solid #222">
  <?php echo $paragraf; ?>
</div>
Jumlah kata: <?php echo $jumlah_kata; ?>
<br/>
<strong>Cari Kata:</strong>
<form action="" method="get" accept-charset="utf-8">
  <input type="text" name="carikata" id="carikata" value="">
  <input type="submit" name="cari" id="cari" value="Cari">
</form>
<?php
if (isset($_GET['cari'])) {
  $counter = 0;
  foreach($kata as $k) {
    if (stristr($k, $_GET['carikata'])) {
      $counter += 1;
    }
  }

  echo $_GET['carikata']." : ".$counter;
}

$urut = $kata;
for ($i = 0; $i < $jumlah_kata; $i++) {
  for ($j = $i + 1; $j < $jumlah_kata; $j++) {
    if ($urut[$i] > $urut[$j]) {
      $temp = $urut[$i];
      $urut[$i] = $urut[$j];
      $urut[$j] = $temp;
    }
  }
}
echo "<br/><br/>".implode(", ", $urut);
?>
