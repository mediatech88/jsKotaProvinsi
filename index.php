<?php
include 'function.php';


$provinsi = query("SELECT * FROM provinsi");
?>

<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>
            Pilihan Ajax
        </h1>
        <div class="row">
            <form action="" method="get">
                <div class="mb-3">
                    <label for="provinsi" class="form-label">Provinsi</label>
                    <select class="form-control" name="provinsi" id="provinsi" onchange="cariKota(this.value)">
                        <option>-- Pilih Provinsi --</option>
                        <?php
                        foreach ($provinsi as $prov) :
                        ?>
                            <option value="<?php echo $prov['id_prov']; ?>"><?php echo $prov['nama_prov']; ?></option>

                        <?php endforeach;
                        ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="kota" class="form-label">Kota</label>
                    <select class="form-control" name="kota" id="kota" onchange="cariKec(this.value)">
                        <option>-- Pilih Kota --</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="kecamatan" class="form-label">Kecamatan</label>
                    <select class="form-control" name="kecamatan" id="kecamatan" onchange="cariDesa(this.value)">
                        <option>-- Pilih Kecamatan --</option>

                    </select>
                </div>
                <div class="mb-3">
                    <label for="desa" class="form-label">Desa / Kelurahan</label>
                    <select class="form-control" name="desa" id="desa">
                        <option>-- Pilih Desa / Kel --</option>

                    </select>
                </div>
                <button type="submit" class="btn btn-primary"> Submit
                </button>
            </form>

        </div>
    </div>
    <div>


        <a href="/print.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Link</a>
    </div>

    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

    <script>
        function cariKota(provinsi) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("kota").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "kota.php?prov=" + provinsi, true);
            xmlhttp.send();
        }

        function cariKec(kota) {
            var provinsi = document.getElementById("provinsi").value
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("kecamatan").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "kecamatan.php?kota=" + kota + "&prov=" + provinsi, true);
            xmlhttp.send();
        }

        function cariDesa(kecamatan) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onload = function() {
                document.getElementById("desa").innerHTML = this.responseText;
            }
            xmlhttp.open("GET", "desa.php?kec=" + kecamatan, true);
            xmlhttp.send();
        }
    </script>

</body>

</html>