<?php
include 'function.php';


$id_kota = $_GET['kota'];
$kecamatan = query("SELECT * FROM kecamatan where id_kota='$id_kota'");


foreach ($kecamatan as $kec) :
?>
    <option value="<?php echo $kec['id_kec']; ?>"><?php echo $kec['nama_kec']; ?></option>

<?php endforeach;
?>