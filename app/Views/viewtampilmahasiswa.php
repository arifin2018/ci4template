<!DOCTYPE html>
<html lang="en">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
<head>
    <meta width=12 name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <!-- Content Header (Page header) -->
        <div class="container-fluid">
    <div class="jumbotron p-3 row" style="width: 103%;">
        <h2 class="col">Data Mahasiswa</h2>
    <button type="button" class="btn-primary" style="border-radius: 12px;" onclick="window.location='<?php echo site_url('mahasiswa/formtambah/')?>'"> Tambah Data </button>
</div>

    <table class="table table-bordered"style="width: 100%;">
        <thead>
            <tr>
                <th>No</th>
                <th style="text-align:center">Nim</th>
                <th style="text-align:center">Nama Mahasiswa</th>
                <th>Jenkel</th>
                <th style="text-align:center">Tempat/Tgl.lahir</th>
                <th style="text-align:center">Alamat</th>
                <th style="text-align:center">Telp/HP</th>
                <th style="text-align:center" colspan="2">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $nomor = 0;
                foreach ($tampildata as $row):
                $nomor++;
            ?>
        <tr>
                <th><?= $nomor ?></th>
                <td width=9%><?= $row->mhsnim?></td><!--array objek -->
                <td width=30%><?= $row->mhsnama?></td>
                <td><?= $row->mhsjenkel?></td>
                <td><?= $row->mhstmplahir  .' / ' . $row->mhstgllahir?></td>
                <td width=40%><?= $row->mhsalamat ?></td>
                <td width=9%><?= $row->mhstelp?></td>
                <td width=9%>
                    <button type="button" class="col-sm btn btn-danger col"  onclick="hapus('<?= $row->mhsnim?>')">
                    Hapus
                    <th><button type="button" class="col-sm btn btn-info col" onclick="edit('<?php $row->mhsnim?>')" >
                    Edit 
                    </button>
                </th>
                </div>
        </tr>
            <?php 
            endforeach;
            ?>
            </tbody>
    </table>
    <script>
        function hapus(nim) {
            pesan= confirm("Yakin anda ingin menghapus data mahasiswa ? ");
            if (pesan){
                window.location.href = ("<?= site_url('mahasiswa/hapus/')?>") +nim;
            } else return false;
        }
        function edit(nim) {
    var yakin = confirm("Apakah kamu yakin akan mengubah data?");
        if (yakin) {
            window.location = ("<?php echo site_url('mahasiswa/formedit/'.$row->mhsnim)?>") +nim;
        } else return false;
        }
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="js/jquery-3.5.1.slim.min.js" ></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </div><!-- /.col -->
</body>
</html>