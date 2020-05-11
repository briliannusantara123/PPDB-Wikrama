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
  		 <img class="mb-4" src="http://4.bp.blogspot.com/-FQ5u-thKT-w/Umh6HU1xQnI/AAAAAAAAAMc/w0MTATc8q_A/s1600/Wikrama+PNG.png" alt="" width="100" height="100">
  		<h5>FORMULIR PENDAFTARAN PESERTA DIDIK BARU TAHUN 2020-2021</h5>

  		<form action="daftar/create" method="POST">
  			<div class="row">
  				<div class="col-md-3">
  					<div class="form-group-inline">
  				<label for="tempatlahir">No Pendaftaran :</label>
  				<label></label>
  			</div>
  				</div>
  				<div class="col-md-3">
  					<div class="form-group-inline">
  				<label>Nomor Test :</label>
  				<label></label>
  			</div>
  				</div>
  			</div>
  			<div class="form-group">
  				<label>_______________________________________________________________________________________________</label>
  			</div>
        <h6>I.DATA CALON MURID</h6>
  			<div class="form-group-inline">
  				@foreach($data_cetak as $cetak)
                      
  				<label>Nama Lengkap          :</label>
  				<label>{{$cetak->namalengkap}}</label>
  				@endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Nama Panggilan         :</label>
  				<label>{{$cetak->namapanggilan}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Jenis Kelamin          :</label>
  				<label>{{$cetak->jk}}</label>
          @endforeach
  			</div>
  			<div class="row">
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label for="tempatlahir">Tempat Lahir          :</label>
          <label>{{$cetak->tempatlahir}}</label>

  				@endforeach
  			</div>
  				</div>
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label>Tanggal Lahir</label>
          <label>{{$cetak->lahir}}</label>

  				@endforeach
  			</div>
  				</div>
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Agama :</label>
  				<label>{{$cetak->agama}}</label>
          @endforeach
  			</div>
  				<div class="form-group-inline">
            @foreach($data_cetak as $cetak)
  				<label>Cita-cita :</label>
  				<label>{{$cetak->citacita}}</label>
          @endforeach
  			</div>
  				<div class="form-group-inline">
            @foreach($data_cetak as $cetak)
  				<label>Hoby :</label>
  				<label>{{$cetak->hoby}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Anak Ke :</label>
  				<label>{{$cetak->anak}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Jumlah Saudara :</label>
  				<label>{{$cetak->jumlah}}</label>
          @endforeach
  			</div>
  			<div class="row">
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label for="tempatlahir">Berat Badan</label>
  				<label>{{$cetak->berat}}</label>
          @endforeach
  			</div>
  				</div>
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label>Tinggi Badan</label>
          <label>{{$cetak->tinggi}}</label>
  				
          @endforeach
  			</div>
  				</div>
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Golongan Darah :</label>
  				<label>{{$cetak->golongan}}</label>
          @endforeach
  			</div>

        <H6>II. KETERANGAN TEMPAT TINGGAL</H6>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Alamat Rumah :</label>
  				<label>{{$cetak->alamat}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Tinggal Dengan :</label>
  				<label>{{$cetak->tinggal}}</label>
          @endforeach
  			</div>
        <H6>III. KETERANGAN KESEHATAN</H6>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Penyakit yang pernah di derita :</label>
  				<label>{{$cetak->penyakit}}</label>
          @endforeach
  			</div>
        <H6>IV. DATA ORANG TUA SISWA</H6>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Nama Ayah :</label>
  				<label>{{$cetak->namaayah}}</label>
          @endforeach
  			</div>
  			<div class="row">
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label for="tempatlahir">Tempat Lahir</label>
  				<label>{{$cetak->tempatlahirayah}}</label>
          @endforeach
  			</div>
  				</div>
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label>Tanggal Lahir</label>
          <label>{{$cetak->lahirayah}}</label>
  				@endforeach
  			</div>
  				</div>
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Pekerjaan :</label>
  				<label>{{$cetak->pekerjaanayah}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Pendidikan Terakhir :</label>
  				<label>{{$cetak->pendidikanayah}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Kewarganegaraan :</label>
  				<label>{{$cetak->wargaayah}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Agama :</label>
  				<label>{{$cetak->agamaayah}}</label>
          @endforeach
  			</div>

  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Nomor HP :</label>
  				<label>{{$cetak->noayah}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Nama Ibu :</label>
  				<label>{{$cetak->namaibu}}</label>
          @endforeach
  			</div>
  			<div class="row">
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label for="tempatlahir">Tempat Lahir</label>
  				<label>{{$cetak->tempatlahiribu}}</label>
          @endforeach
  			</div>
  				</div>
  				<div class="col-md-3">
  					<div class="form-group-inline">
              @foreach($data_cetak as $cetak)
  				<label>Tanggal Lahir</label>
  				<label>{{$cetak->lahiribu}}</label>
          @endforeach
  			</div>
  				</div>
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Pekerjaan :</label>
  				<label>{{$cetak->pekerjaanibu}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Pendidikan Terakhir :</label>
  				<label>{{$cetak->pendidikanibu}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Kewarganegaraan :</label>
  				<label>{{$cetak->wargaibu}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Agama :</label>
  				<label>{{$cetak->agamaibu}}</label>
          @endforeach
  			</div>
  			<div class="form-group-inline">
          @foreach($data_cetak as $cetak)
  				<label>Nomor HP :</label>
  				<label>{{$cetak->noibu}}</label>
          @endforeach
  			</div>

  			
  		</form>
  	</div>
   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>