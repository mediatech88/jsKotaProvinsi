<?php
include 'function.php';


$id_kecamatan = $_GET['kec'];
$kecamatan = query("SELECT * FROM desa  where id_kec='$id_kecamatan' ORDER BY nama_desa ASC");


foreach ($kecamatan as $kec) :
?>
    <option value="<?php echo $kec['id_desa']; ?>"><?php echo $kec['nama_desa']; ?></option>

<?php endforeach;
?>


<h1>hello</h1>