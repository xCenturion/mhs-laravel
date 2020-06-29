@extends('layouts.master')

@section('content')
	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Mahasiswa</h3>
									<div class="right">
									<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
								</button>
									</div>
								</div>
								<div class="panel-body">
									<table class="table table-hover">
										<thead>
											<tr>
												<th>Nama Depan</th>
												<th>Nama Belakang</th>
												<th>Jenis Kelamin</th>
												<th>Agama</th>
												<th>Alamat</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
										@foreach($data_mhs as $mhs)
										<tr>
											<td><a href="/mahasiswa/{{$mhs->id}}/profile">{{$mhs->nama_depan}}</a></td>
											<td><a href="/mahasiswa/{{$mhs->id}}/profile">{{$mhs->nama_belakang}}</a></td>
											<td>{{$mhs->jenis_kelamin}}</td>
											<td>{{$mhs->agama}}</td>
											<td>{{$mhs->alamat}}</td>
											<td>
												<a href="/mahasiswa/{{$mhs->id}}/edit" class="btn btn-warning btn-sm">Update</a>
												<a href="/mahasiswa/{{$mhs->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Hapus Data?')">Delete</a>
											</td>
											<td></td>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		<form action="/mahasiswa/create" method="POST">
			{{csrf_field()}}
		  <div class="form-group">
		    <label>Nama Depan</label>
		    <input name="nama_depan" type="text" class="form-control" id="nama_depan" placeholder="Nama Depan">
		  </div>
		  <div class="form-group">
		    <label>Nama Belakang</label>
		    <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" placeholder="Nama Belakang">
		  </div>
		  <div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
		    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
		      <option value="Laki-laki">Laki-laki</option>
		      <option value="Perempuan">Perempuan</option>
		    </select>
  		</div>
		<div class="form-group">
		    <label for="exampleFormControlSelect1">Pilih Agama</label>
		    <select name="agama" class="form-control" id="agama">
		      <option value="Islam">Islam</option>
		      <option value="Kristen">Kristen</option>
		      <option value="Katolik">Katolik</option>
		      <option value="Hindu">Hindu</option>
		      <option value="Budha">Budha</option>
		    </select>
  		</div>
  		<div class="form-group">
		    <label for="exampleFormControlTextarea1">Alamat</label>
		    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
		</form>
      </div>
    </div>
  </div>
</div>
	@stop