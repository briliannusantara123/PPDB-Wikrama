<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>PPDB-SMK WIKRAMA</title>
  </head>
  <body style="background-image: url();">
  	<div class="container">
  		<h2 class="alert alert-primary text-center mt-3">Formulir Pendaftaran Siswa Baru</h2>
  		<h5>Data Calon Murid</h5>
  		<form action="daftar/create" method="POST">
  			 <input type="hidden" name="_token" value="{{ csrf_token() }}">
  			<div class="form-group">
  				<label>Nama Lengkap</label>
  				<input type="text" name="namalengkap" class="form-control" placeholder="Masukan Nama Lengkap">
  			</div>
  			<div class="form-group">
  				<label>Nama Panggilan</label>
  				<input type="text" name="namapanggilan" class="form-control" placeholder="Masukan Nama Panggilan">
  			</div>
  			<div class="form-group">
  				<label>Jenis Kelamin</label><br>
  				<div class="form-check-inline">
  					<input type="radio" class="form-check-input" name="jk">
  					<label>Laki-laki</label>
  				</div>
  				<div class="form-check-inline">
  					<input type="radio" class="form-check-input" name="jk">
  					<label>Perempuan</label>
  				</div>

  			</div>
  			<div class="row">
  				<div class="col-md-6">
  					<div class="form-group">
  				<label for="tempatlahir">Tempat Lahir</label>
  				<input type="text" name="tempatlahir" class="form-control" placeholder="Masukan Tempat Lahir" id="tempatlahir">
  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="form-group">
  				<label>Tanggal Lahir</label>
  				<input type="date" name="lahir" class="form-control" placeholder="Masukan Tanggal Lahir">
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>Agama</label>
  				<input type="text" name="agama" class="form-control" placeholder="Masukan Agama">
  			</div>
  			<div class="form-group">
  				<label>Cita-Cita</label>
  				<input type="text" name="citacita" class="form-control" placeholder="Masukan Cita-Cita">
  			</div>
  			<div class="form-group">
  				<label>Hoby</label>
  				<input type="text" name="hoby" class="form-control" placeholder="Masukan Hoby">
  			</div>
  			<div class="form-group">
  				<label>Anak Ke</label>
  				<input type="text" name="anak" class="form-control" placeholder="Masukan Anak Ke">
  			</div>
  			<div class="form-group">
  				<label>Jumlah Saudara</label>
  				<div class="row">
  					<div class="col-md-3">
  						<input type="text" name="jumlah" class="form-control" placeholder="Masukan Jumlah Saudara">
  					</div>
  					

  				</div>
  				<div class="row">
  				<div class="col-md-6">
  					<div class="form-group">
  				<label for="tempatlahir">Berat Badan</label>
  				<input type="text" name="berat" class="form-control" placeholder="Masukan Berat Badan">
  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="form-group">
  				<label>Tinggi Badan</label>
  				<input type="text" name="tinggi" class="form-control" placeholder="Masukan Tinggi Badan">
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>Golongan Darah</label>
  				<input type="text" name="golongan" class="form-control" placeholder="Masukan Golongan Darah">
  			</div>
  				<h5>Keterangan Tempat Tinggal</h5>
  			</div>
  			
  			<div class="form-group">
  				<label>Alamat Rumah</label>
  				<textarea class="form-control col-5"  rows="3" name="alamat"></textarea>
  			</div>
  			<div class="form-group">
  				<label>Tinggal Dengan</label><br>
  				<div class="form-check-inline">
  					<input type="radio" class="form-check-input" name="tinggal">
  					<label>Orang Tua</label>
  				</div>
  				<div class="form-check-inline">
  					<input type="radio" class="form-check-input" name="tinggal">
  					<label>Asrama</label>
  				</div>
  				<div class="form-check-inline">
  					<input type="radio" class="form-check-input" name="tinggal">
  					<label>Saudara</label>
  				</div>

  			</div>
  			<h5>Keterangan Kesehatan</h5>
  			<div class="form-group">
  				<label>Penyakit Yang Pernah Di Derita</label>
  				<input type="text" name="penyakit" class="form-control" placeholder="Masukan Nama Penyakit">
  			</div>
  			<h5>Data Orang Tua</h5>
  			<div class="form-group">
  				<label>Nama Ayah</label>
  				<input type="text" name="namaayah" class="form-control" placeholder="Masukan Nama">
  			</div>
  			<div class="row">
  				<div class="col-md-6">
  					<div class="form-group">
  				<label for="tempatlahir">Tempat Lahir</label>
  				<input type="text" name="tempatlahirayah" class="form-control" placeholder="Masukan Tempat Lahir" id="tempatlahir">
  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="form-group">
  				<label>Tanggal Lahir</label>
  				<input type="date" name="lahirayah" class="form-control" placeholder="Masukan Tanggal Lahir">
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>Pekerjaan</label>
  				<input type="text" name="pekerjaanayah" class="form-control" placeholder="Masukan Pekerjaan">
  			</div>
  			
  			<div class="form-group">
  				<label>Pendidikan Terakhir</label>
  				<input type="text" name="pendidikanayah" class="form-control" placeholder="Masukan Nama Lengkap">
  			</div>
  			<div class="row">
  				<div class="col-md-6">
  					<div class="form-group">
  				<label for="tempatlahir">Kewarganegaraan</label>
  				<input type="text" name="wargaayah" class="form-control" placeholder="Masukan Kewarganegaraan">
  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="form-group">
  				<label>Agama</label>
  				<input type="text" name="agamaayah" class="form-control" placeholder="Masukan Agama">
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>Nomor HP</label>
  				<input type="text" name="noayah" class="form-control" placeholder="Masukan Nomor HP">
  			</div>
  				<div class="form-group">
  				<label>Nama ibu</label>
  				<input type="text" name="namaibu" class="form-control" placeholder="Masukan Nama">
  			</div>
  			<div class="row">
  				<div class="col-md-6">
  					<div class="form-group">
  				<label for="tempatlahir">Tempat Lahir</label>
  				<input type="text" name="tempatlahiribu" class="form-control" placeholder="Masukan Tempat Lahir" id="tempatlahir">
  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="form-group">
  				<label>Tanggal Lahir</label>
  				<input type="date" name="lahiribu" class="form-control" placeholder="Masukan Tanggal Lahir">
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>Pekerjaan</label>
  				<input type="text" name="pekerjaanibu" class="form-control" placeholder="Masukan Pekerjaan">
  			</div>
  			
  			<div class="form-group">
  				<label>Pendidikan Terakhir</label>
  				<input type="text" name="pendidikanibu" class="form-control" placeholder="Masukan Pendidikan Terakhir">
  			</div>
  			<div class="row">
  				<div class="col-md-6">
  					<div class="form-group">
  				<label for="tempatlahir">Kewarganegaraan</label>
  				<input type="text" name="wargaibu" class="form-control" placeholder="Masukan Kewarganegaraan">
  			</div>
  				</div>
  				<div class="col-md-6">
  					<div class="form-group">
  				<label>Agama</label>
  				<input type="text" name="agamaibu" class="form-control" placeholder="Masukan Agama">
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>Nomor HP</label>
  				<input type="text" name="noibu" class="form-control" placeholder="Masukan Nomor HP">
  			</div>
  			 <button type="submit" class="btn btn-primary col-12">Submit</button>
  		</form>
  	</div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>