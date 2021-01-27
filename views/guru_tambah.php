<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Tambah Data Guru</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">Nama Guru</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Nama Guru" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="jikel" class="col-sm-3 control-label">Jenis Kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jikel" class="form-control" id="inputEmail3" placeholder="Jenis Kelamin" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="agama" class="form-control" id="inputEmail3" placeholder="Agama" required>
                            </div>
                        </div>
						 <div class="form-group">
                            <label for="mapel" class="col-sm-3 control-label">Mapel</label>
                            <div class="col-sm-9">
                                <input type="text" name="mapel" class="form-control" id="inputEmail3" placeholder="Mapel" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pendidikan" class="col-sm-3 control-label">Pendidikan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pendidikan" class="form-control" id="inputEmail3" placeholder="pendidikan" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="tglA_lahir" class="col-sm-3 control-label">Tanggal Lahir</label>
                            <div class="col-sm-9">
                                <input type="date" name="tgl_lahir" class="form-control" id="inputEmail3" placeholder="Tanggal Lahir" required>
                            </div>
                        </div>
				
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=guru&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $n=$_POST['nama'];
	$j=$_POST['jikel'];
	$a=$_POST['agama'];
    $m=$_POST['mapel'];
    $p=$_POST['pendidikan'];
    $t=$_POST['tgl_lahir'];
 
    //buat sql
    $sql="INSERT INTO guru VALUES ('','$n','$j','$a','$m','$p','$t')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Guru Error");
    if ($query){
        echo "<script>window.location.assign('?page=guru&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
