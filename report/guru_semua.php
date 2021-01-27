<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Semua Guru</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi SMP Negeri 1 Kisaran </h2>
                        <h4>Jl. Madong Lubis, Selawan,  <br> Kec. Kisaran Tim., Kabupaten Asahan, Sumatera Utara 21221</h4>
                        <hr>
                        <h3>DATA SELURUH GURU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
                                <tr>
                                <th>No.</th><th class="text-center">nama</th><th class="text-center">Jenis Kelamin</th><th class="text-center">Agama</th><th class="text-center">Mapel</th><th class="text-center">Pendidikan</th><th class="text-center">Tanggal Lahir</th>
                            </tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM guru";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk 
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                <td><?= $nomor ?></td>
                                    <td><?= $data['nama'] ?></td>
									<td><?= $data['jikel'] ?></td>
									<td><?= $data['agama'] ?></td>
									<td><?= $data['mapel'] ?></td>
                                    <td><?= $data['pendidikan'] ?></td>
                                    <td><?= $data['tgl_lahir'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Kisaran  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Kepala Sekolah, S.Pd<strong></u><br>
                                        NIP.01231231238
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>