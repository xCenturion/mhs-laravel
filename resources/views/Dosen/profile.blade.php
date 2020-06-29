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
										<h3 class="name">{{$dosen->nama}}</h3>
										<span class="online-status status-available">Available</span>
									</div>
								</div>
					</div>
					<!-- END LEFT COLUMN -->
					<!-- RIGHT COLUMN -->
					<div class="profile-right">
						<div class="panel">
							<div class="panel-heading">
								<h3 class="panel-title">Mata Kuliah yang diajar dosen {{$dosen->nama}}</h3>
							</div>
								<div class="panel-body">
									<table class="table table-striped">
										<thead>
											<tr>
												<th>Nama</th>
												<th>Semester</th>
											</tr>
										</thead>
										<tbody>
											@foreach($dosen->matkul as $matkul)
											<tr>
												<td>{{$matkul->nama}}</td>
												<td>{{$matkul->semester}}</td>
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