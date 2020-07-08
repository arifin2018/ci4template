<!DOCTYPE html>
<html lang="en">
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Mahasiswa</title>
</head>
<style>
        .element {
    background: orange;
    left: 20px;
	position: relative;
    }
    #card-content {
        padding: 125px 44px;
    }

    #card-title {
        letter-spacing: 4px;
        padding-bottom: 23px;
        padding-top: 13px;
        text-align: center;
    }
    #card {
        background: #fbfbfb;
        border-radius: 15px;
        box-shadow: 1px 5px 20px  rgba(100, 150, 180, 11140);
        height: 100px;
        margin: 2rem auto 8.1rem auto;
        width: 929px;
    }
</style>
<body>
<div class=" .container-fluid">
    
    <div id="card">
    <p class="card text-center" >
    <h2 class="card-header">Form Edit Mahasiswa</h2>
    <p>
        <?=form_open('mahasiswa/updatedata')?>
        <table class="table table-striped table-dark">
            <tr>
                <td style = "word-spacing: 200px;">NIM : </td>
                <td>
                    <input type="text" name="nim" maxLength="15" value="<?= $nim; ?>">
                </td>
            </tr>
            <tr>
                <td style = "word-spacing: 128px;">NamaLengkap : </td>
                <td>
                    <input type="text" name="nama" size="50" value="<?= $nama; ?>">
                </td>
            </tr>
            <tr>
                <td style = "word-spacing: 140px;">JenisKelamin  : </td>
                <td>
                    <input type="radio" name="jenkel" value="L" <?php if ($jenkel == 'L') echo 'checked';?> Laki-Laki> Laki-Laki
                    <input type="radio" name="jenkel" value="P"<?php if ($jenkel == 'P') echo 'checked';?> Perempuan> Perempuan
                </td>
            </tr>
            <tr>
                <td style = "word-spacing: 83px;">Tempat/TanggalLahir : </td>
                <td>
                    <input type="text" name="tempat" size="50" value="<?= $tempat; ?>"> / <input class="rounded-pill" type="date" name="tanggal" value="<?= $tanggal; ?>">
                </td>
            </tr>
            <tr>
                <td style = "word-spacing: 180px;">Alamat : </td>
                <td>
                    <textarea name="alamat" cols="60" rows="5"><?= $alamat; ?></textarea>
                </td>
            </tr>
            <tr>
                <td style = "word-spacing: 164px;">NoTelfon : </td>
                <td>
                    <input type="text" name="telp" pattern="{0-9}+" value="<?= $telp; ?>">
                </td>
            </tr>
            <td></td>
            <td>
                <input class="btn btn-info" type="submit" type="submit" value="Update Data">
                <button class="btn btn-danger right element" type="button" onclick="window.location='<?php echo site_url('mahasiswa')?>'" >
                Kembali
                </button>
            </td>
        </table>
        <?=form_close();?>
    </p>
        <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>