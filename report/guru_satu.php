<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Guru</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM guru WHERE id_guru ='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                    <h2>Sistem Informasi SMP Negeri 1 Kisaran </h2>
                        <h4>Jl. Madong Lubis, Selawan,  <br> Kec. Kisaran Tim., Kabupaten Asahan, Sumatera Utara 21221</h4>
                        <hr>
                        <h3>DATA GURU</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
                            <tr>
                            <td >Nama Guru</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Kelamin</td> <td><?= $data['jikel'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['agama'] ?></td>
                        </tr>
						<tr>
                            <td>Mapel</td> <td><?= $data['mapel'] ?></td>
                        </tr>
                        <tr>
                            <td>Pendidikan</td> <td><?= $data['pendidikan'] ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td> <td><?= $data['tgl_lahir'] ?></td>
                        </tr>
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