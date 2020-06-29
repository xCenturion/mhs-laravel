@extends('layouts.master')

@section('content')

	<div class="main">
		<div class="main-content">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-12">
						<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Inputs</h3>
								</div>
								<div class="panel-body">
								<form action="/mahasiswa/{{$mhs->id}}/update" method="POST">
									{{csrf_field()}}
								  <div class="form-group">
								    <label>Nama Depan</label>
								    <input name="nama_depan" type="text" class="form-control" id="nama_depan" placeholder="Nama Depan" value="{{$mhs->nama_depan}}">
								  </div>
								  <div class="form-group">
								    <label>Nama Belakang</label>
								    <input name="nama_belakang" type="text" class="form-control" id="nama_belakang" placeholder="Nama Belakang" value="{{$mhs->nama_belakang}}">
								  </div>
								  <div class="form-group">
								    <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
								    <select name="jenis_kelamin" class="form-control" id="jenis_kelamin">
								      <option value="Laki-laki" @if($mhs->jenis_kelamin == 'Laki-laki') selected @endif>Laki-laki</option>
								      <option value="Perempuan"@if($mhs->jenis_kelamin == 'Perempuan') selected @endif>Perempuan</option>
								    </select>
						  		</div>
								<div class="form-group">
								    <label for="exampleFormControlSelect1">Pilih Agama</label>
								    <select name="agama" class="form-control" id="agama">
								      <option value="Islam" @if($mhs->agama == 'Islam') selected @endif>Islam</option>
								      <option value="Kristen" @if($mhs->agama == 'Kristen') selected @endif>Kristen</option>
								      <option value="Katolik" @if($mhs->agama == 'Katolik') selected @endif>Katolik</option>
								      <option value="Hindu" @if($mhs->agama == 'Hindu') selected @endif>Hindu</option>
								      <option value="Budha" @if($mhs->agama == 'Budha') selected @endif>Budha</option>
								    </select>
						  		</div>
						  		<div class="form-group">
								    <label for="exampleFormControlTextarea1">Alamat</label>
								    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$mhs->alamat}}</textarea>
								</div>
								<button type="submit" class="btn btn-warning">Update</button>
								</form>
								</div>
							</div>
					</div>
				</div>
			</div>
		</div>
	</div>


@stop