@extends('layouts.master')

@section('content')
<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<div class="panel panel-profile">
						<div class="clearfix">
							<!-- LEFT COLUMN -->
							<div class="profile-left">
								<!-- PROFILE HEADER -->
								<div class="profile-header">
									<div class="overlay"></div>
									<div class="profile-main">
										<img src="{{asset('/admin/assets/img/Closed.png')}}" class="img-circle" alt="Avatar">
										<h3 class="name">{{$mhs-> nama_depan}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
									<div class="profile-stat">
										<div class="row">
											<div class="col-md-4 stat-item">
												{{$mhs->matkul->count()}} <span>Mata Kuliah</span>
											</div>
											<div class="col-md-4 stat-item">
												15 <span>Awards</span>
											</div>
											<div class="col-md-4 stat-item">
												2174 <span>Points</span>
											</div>
										</div>
									</div>
								</div>
								<!-- END PROFILE HEADER -->
								<!-- PROFILE DETAIL -->
								<div class="profile-detail">
									<div class="profile-info">
										<h4 class="heading">Data Diri</h4>
										<ul class="list-unstyled list-justify">
											<li>Jenis Kelamin <span>{{$mhs->jenis_kelamin}}</span></li>
											<li>Agama <span>{{$mhs->agama}}</span></li>
											<li>Alamat <span>{{$mhs->alamat}}</span></li>
										</ul>
									</div>
									<div class="profile-info">
										<h4 class="heading">About</h4>
										<p>Interactively fashion excellent information after distinctive outsourcing.</p>
									</div>
									<div class="text-center"><a href="/mahasiswa/{{$mhs->id}}/edit" class="btn btn-primary">Edit Profile</a></div>
								</div>
								<!-- END PROFILE DETAIL -->
							</div>
							<!-- END LEFT COLUMN -->
							<!-- RIGHT COLUMN -->
							<div class="profile-right">
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Mata Kuliah</h3>
								</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Kode</th>
												<th>Nama</th>
												<th>Semester</th>
												<th>Dosen</th>
												<th>Nilai</th>
											</tr>
										</thead>
										<tbody>
											@foreach($mhs->matkul as $matkul)
											<tr>
												<td>{{$matkul->kode}}</td>
												<td>{{$matkul->nama}}</td>
												<td>{{$matkul->semester}}</td>
												<td><a href="/dosen/{{$matkul->dosen_id}}/profile">{{$matkul->dosen->nama}}</a></td>
												<td>{{$matkul->pivot->nilai}}</td>
											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							</div>
							<!-- END RIGHT COLUMN -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
@endsection