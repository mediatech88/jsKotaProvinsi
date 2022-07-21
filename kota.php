<?php
include 'function.php';


$id_prov = $_GET['prov'];


$kota = query("SELECT * FROM kota  where id_prov='$id_prov' ORDER BY nama_kota ASC");


foreach ($kota as $kota) :
?>
    <option value="<?php echo $kota['id_kota']; ?>"><?php echo $kota['nama_kota']; ?></option>

<?php endforeach;
?>