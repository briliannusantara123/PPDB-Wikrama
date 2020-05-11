@extends('layouts.master')
@section('content')
<br>
  <div class="main">
    <div class="main-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-9">
            <div class="panel">
                <div class="panel-heading">
                  <h3 class="panel-title">Data Pendaftaran</h3>
                  
                   
                </div>
                <div class="panel-body">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                       <th>Nama Siswa Baru</th>
                       <th>Tanggal Daftar</th>
                      </tr>
                    </thead>
                   <tbody>
                      @foreach($data_admin as $admin)
                      <tr>
                        <td><a href="/daftar/{{$admin->id}}/cetak">{{$admin->namalengkap}}</a></td>
                        <td>{{$admin->created_at}}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
          </div> 
        </div>
      </div>
    </div>
  </div>
						
@stop